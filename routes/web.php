<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TdayController;
// use DB facade
use Illuminate\Support\Facades\DB;
// use request
use Illuminate\Http\Request;
use App\Models\Location;
use App\Models\Tday;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// basic route example with a callback function so that you can see that we
// do not need a controller, but can develop the app in out web.php file
// ofcourse... not best practice!

// test routes
Route::get('/hello', function () {
    $a = 12;
    $b = 13;
    return $a + $b;
    // return view('welcome');
});


Route::get('promo', function(){

        $Location = new Location;
        $results = $Location::all();
        $title = "Dit zijn one locaties";
        //dd($result);

        $tdays = Tday::with('locations')->get();
        //dd($tdays);
        return view ('promo',compact('results','title','tdays'));
});


// tday routes
Route::get('/', [TdayController::class, 'index']);


// user routes
Route::get('users/{id}',[UserController::class, 'getUser']);

// static navigation routes
Route::get ('about', function () {
    return view('about');
});

Route::get ('contact', function () {
    return view('contact');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::post('save',function(Request $request){
    //dd($request->all());
    $location = new App\Models\Location;
    $location->name = $request->name;
    $location->save();

    return redirect('/')->with('message', 'Location Added');
});