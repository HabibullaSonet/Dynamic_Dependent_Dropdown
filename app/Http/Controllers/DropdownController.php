<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DropdownController extends Controller
{
    public function index(){
        
        $date['countries'] = Country::get(["name", "id"]);
        return view('dropdown', $date);
    }


    public function fetchState(Request $request){
        $date['states'] = State::where("country_id", $request->country_id)->get(["name", "id"]);
        return response()->json($data);
    }

    public function fetchState(Request $request){
        $data['cities'] = City::where("state_id", $request->state_id)->get(["name", "id"]);
        return response()->json($data);
    }
}
