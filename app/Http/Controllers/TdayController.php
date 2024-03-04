<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// acces model tday
use App\Models\Tday;

class TdayController extends Controller
{
    public function index()
    {
        $tdays = Tday::all();
        return view('welcome', compact('tdays'));
    }
}
