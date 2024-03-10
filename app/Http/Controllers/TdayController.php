<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// acces model tday
use App\Models\Tday;

class TdayController extends Controller
{
    public function index()
    {
        $tdays = Tday::with('locations')->get();
        //dd($tdays);
        return view('welcome', compact('tdays'));
    }
}
