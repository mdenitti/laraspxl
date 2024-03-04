<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TdayController;
// use DB facade
use Illuminate\Support\Facades\DB;

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

Route::get('/hello', function () {
    $a = 12;
    $b = 13;
    return $a + $b;
    // return view('welcome');
});

Route::get('/', [TdayController::class, 'index']);
Route::get('users/{id}',[UserController::class, 'getUser']);