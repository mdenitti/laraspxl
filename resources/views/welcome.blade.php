@extends('cyborg.app')

@section('content')


<h3>Welkom op onze Themadag boeking<h3>

@if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif


<form method="POST" action="/save">
    @csrf
    <input class="form-control mb-2 mt-2" type="text" name="name" placeholder="Uw naam">

    <select name="day" class="form-control">
        @foreach($tdays as $tday)
            <option value="{{$tday->id}}">{{$tday->name}}</option> 
        @endforeach
    </select>

    <button class="btn btn-light mt-2" type="submit">Submit</button>
</form>




@endsection

@section('extra')
<h2>Extra yielded from the home</h2>
@endsection
