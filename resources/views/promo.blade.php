@extends('cyborg.app')

@section('content')
    <div class="white">
    <h2> {{$title}} </h2>
    @foreach ($results as $result) 
        {{$result->name}} <hr>
    @endforeach
    </div>
@endsection