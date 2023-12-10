<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;

class LocationController extends Controller
{
    function getLocation(Request $request){
       $ipAddress =  $request->ip();
       $userIp = $_SERVER['REMOTE_ADDR'];

       $userIp = "60.120.0.0";
       $location = Location::get($userIp);
       dd($location);
    }
}
