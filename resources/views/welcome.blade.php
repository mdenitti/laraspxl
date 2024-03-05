@extends('cyborg.app')

@section('content')
<h1>Welkom op onze Themadag boeking<h1>

<select name="day">
@foreach($tdays as $tday)
    <option value="{{$tday->id}}">{{$tday->name}}</option> 
@endforeach
</select>
@endsection

@section('extra')
<h2>Extra yielded from the home</h2>
@endsection
