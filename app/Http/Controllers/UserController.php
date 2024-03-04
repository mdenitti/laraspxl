<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserController extends Controller
{

    public function getAllUsers () {
        // select * from users
        //$users = DB::table('users')->get();
        
        $users = User::all(); // SELECT * FROM USERS;

        // return view ('users', compact('users'));
        return view ('welcome', compact('users'));
    }

    // make a hello world method
    public function getUser($id)
    {
        // select * from users where id = $id
        $user = DB::table('users')->where('id', $id)->first();
        // return view ('user', compact('user'));
        return view ('userdetail', compact('user'));
    }
}
