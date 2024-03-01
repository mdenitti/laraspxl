<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // make a hello world method
    public function hello($id)
    {
        $name = "massimo";
        $email = "test@test";
        $values = ["key1"=>"value1", "key2"=>"value2"];
        // DB fetch van de id
        // return 'hello '.$id;
        return view('welcome', compact('id', 'values', 'name', 'email'));
    }
}
