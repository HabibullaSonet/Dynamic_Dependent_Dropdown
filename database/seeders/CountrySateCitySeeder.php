<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\State;
use App\Models\Country;
use App\Models\City;

class CountrySateCitySeeder extends Seeder
{

    public function run(): void
    {
         /*-------------------------------------------------------------------------------------------------------------------US Country Data
        ----------------------------------------------------------------------------------------------------------------------*/

        $country = Country::create([
            'name' => 'United State'
        ]);
        $country_id = $country->id;

        $state = State::create([
            'country_id' => $country->id,
            'name' => 'Florida'
        ]);

        $state_id = $state->id;

        city::create([
            'state_id' => $state_id, 
            'name' => 'Miami'
        ]);

        city::create([
            'state_id' => $state_id, 
            'name' => 'Tampa'
        ]);
        $state_id = $state->id;

        /*---------------------------------------------------------------------------------------------------------------------
        Banladesh Country Data
        ----------------------------------------------------------------------------------------------------------------------*/
         

       
        $country = Country::create([
            'name' => 'Bangladesh'
        ]);
        $country_id = $country->id;

        $state = State::create([
            'country_id' => $country_id, 
            'name' => 'Rangpur'
        ]);
        $state_id = $state->id;

        City::create([
            'state_id' => $state_id, 
            'name' => 'Kaunia'
        ]);

        City::create([
            'state_id' => $state_id, 
            'name' => 'Tapamodhupur'
        ]);
        $state_id = $state->id;
        
    }
}
