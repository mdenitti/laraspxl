@extends('cyborg.app')

@section('content')


<h3>Welkom op onze Themadag boeking<h3>

@if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif

@if(Session::has('booking'))
    <div class="booking-details">
        {{-- Unserialize the booking object --}}
        @php $booking = decrypt(Session::get('booking')); @endphp

        <p><strong>Naam:</strong> {{ $booking->firstname . ' ' . $booking->lastname }}</p>
        <p><strong>Email & telefoon:</strong> {{ $booking->email . ' ' . $booking->phone }}</p>
        {{-- Display other booking details as needed --}}
    </div>
@endif

<form method="POST" action="{{ route('booking.store') }}">
    @csrf
    <input class="form-control mb-2 mt-2" type="text" name="lastname" placeholder="Uw achternaam">

     <input class="form-control mb-2 mt-2" type="text" name="firstname" placeholder="Uw voornaam">

     <input class="form-control mb-2 mt-2" type="email" name="email" placeholder="Uw email">

      <input class="form-control mb-2 mt-2" type="text" name="phone" placeholder="Uw telefoon">

    <h4>Selecteer een dag</h4>

<select class="form-control" name="tday_location_id" id="tday_location_id"> 
    @foreach($tdays as $tday)
        @foreach($tday->locations as $location) 
            <option value="{{ $location->id }}_{{ $tday->id }}">
                {{ date('d-m-Y', strtotime($tday->date)) }} - {{ $tday->name }} - {{ $location->name }}
            </option>
        @endforeach
    @endforeach
</select>


   


    <button class="btn btn-light mt-2" type="submit">Boek nu</button>
</form>




@endsection

@section('extra')
<h2>Extra yielded from the home</h2>
@endsection
