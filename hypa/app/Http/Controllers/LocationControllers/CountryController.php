<?php

namespace App\Http\Controllers\LocationControllers;
use App\ApiResponse;
use App\Models\Location\Country;
use App\Models\Location\City;
use App\Models\Location\State;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    /** @return Countries with the states and cities  */
    public function index(){
        $countries=Country::all();
        foreach ($countries as $country) {
            $this->loadCountryStates($country);
        }
        $response = new ApiResponse(ApiResponse::$SUCCESS,'Sucess!',$countries);
        return response()->json($response);
    }

    private function loadCountryStates($country){
        $states=State::where('country_id',$country->id)->get();
        foreach ($states as $state) {
            $this->loadStateCities($state);
        }
        $country->states=$states;
    }

    private function loadStateCities($state){
        $cities=City::where('state_id',$state->id)->get();
        $state->cities=$cities;
    }
}
