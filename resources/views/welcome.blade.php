<h1>Hi {{$name}} </h1>

@foreach ($values as $key => $value)
    <p>{{$key}} : {{$value}}</p>
@endforeach