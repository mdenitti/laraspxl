<h1>Hi {{$name}} </h1>
<h2>My email = {{$email}}</h2>

@foreach ($values as $key => $value)
    <p>{{$key}} : {{$value}}</p>
@endforeach