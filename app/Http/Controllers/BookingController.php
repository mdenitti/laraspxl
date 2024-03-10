<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use Illuminate\Support\Facades\Session;

class BookingController extends Controller
{

    public function store(Request $request)
    {

        $booking = new Booking();

        /*
        explode('_', $tday_location_str): Splits the string using the underscore separator into an array.
        list($location_id, $tday_id): Conveniently assigns the elements of the array to the $location_id and $tday_id variables. 
        */

        $tday_location_str = $request->input('tday_location_id');
        list($location_id, $tday_id) = explode('_', $tday_location_str);

        $booking->tday_id = $tday_id;
        $booking->location_id = $location_id;

        $booking->lastname = $request->lastname;
        $booking->firstname = $request->firstname;
        $booking->email = $request->email;
        $booking->phone = $request->phone;

        // Flash the booking object
        Session::flash('booking', serialize($booking)); 
      
        $booking->save();
        return redirect('/')->with('message', 'Prima ontvangen. Bedankt.');
    }
}
