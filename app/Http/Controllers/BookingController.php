<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{

    public function store(Request $request)
    {
        $booking = new Booking();
        $booking->lastname = $request->lastname;
        $booking->firstname = $request->firstname;
        $booking->email = $request->email;
        $booking->phone = $request->phone;
        $booking->tday_id = $request->tday_id;
        $booking->save();
        return redirect('/')->with('message', 'Prima ontvangen. Bedankt.');
    }
}
