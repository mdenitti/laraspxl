<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use App\Mail\BookingMail;

class BookingController extends Controller
{
    public function store(Request $request)
    {

        //dd($request->all());
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
        Session::flash('booking', encrypt($booking)); 

        // let's send out an admin notification email with this booking and the laravel raw method
        Mail::raw('New themadag booking: ' . $booking->firstname . ' ' . $booking->lastname . ' (' . $booking->email . ')', function ($message) {
            $message->from('admin@deblauwevogel.be', 'DBV');
            $message->to('admin@deblauwevogel.be', 'DBV');
        });

        // it's time for the semi-grand finale ... let's send the mail in HTML to auntie Frieda!
        Mail::send('mail.booking', compact('booking'), function($message) use ($booking){ 
            $message->to($booking->email);
            // blind carbon copy -> see how my client receive their emails
            // $message->bcc('admin@deblauwevogel.be', 'DBV');
            $message->subject('Bedankt voor uw booking: ' . $booking->firstname . ' ' . $booking->lastname . ' (' . $booking->email . ')'); 
        });
      
        // Send an extra email to the client with some instructions on how get to the location.
        // But this time we will use the mailable instead of the send method.
        Mail::to($booking->email)->send(new BookingMail($booking));


        $booking->save();
        return redirect('/')->with('message', 'Prima ontvangen. Bedankt.');
    }
}
