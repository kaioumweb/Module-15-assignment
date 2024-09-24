<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function index(Request $request, $id){
        $name = "Donal Trump";
        $age = "75";

        //Array Data
        $data = [
            'id'    =>  $id,
            'name'  =>  $name,
            'age'   =>  $age,
        ];

        //Set cookie variables 
        $cookie_name = 'access_token';
        $cookie_value = '123-XYZ';
        $minutes = 1;
        $path = '/';
        $domain = $_SERVER['SERVER_NAME'];
        $secure = false;
        $httpOnly = true; 

        //Create cookie
        $cookie = cookie($cookie_name, $cookie_value, $minutes, $path, $domain, $secure, $httpOnly);

        //Return response
        return response()->json($data, 200)->cookie($cookie);

    }  


}
