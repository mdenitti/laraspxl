@extends('cyborg.app')

@section('content')


<h3>Welkom op onze Themadag boeking<h3>

@if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif


<form method="POST" action="{{ route('booking.store') }}">
    @csrf
    <input class="form-control mb-2 mt-2" type="text" name="lastname" placeholder="Uw achternaam">

     <input class="form-control mb-2 mt-2" type="text" name="firstname" placeholder="Uw voornaam">

     <input class="form-control mb-2 mt-2" type="email" name="email" placeholder="Uw email">

      <input class="form-control mb-2 mt-2" type="text" name="phone" placeholder="Uw telefoon">

    <h4>Selecteer een dag</h4>
    <select name="tday_id" class="form-control">
        @foreach($tdays as $tday)
            <option value="{{$tday->id}}">{{$tday->name}}</option> 
        @endforeach
    </select>

    <button class="btn btn-light mt-2" type="submit">Boek nu</button>
</form>




@endsection

@section('extra')
<h2>Extra yielded from the home</h2>
@endsection
