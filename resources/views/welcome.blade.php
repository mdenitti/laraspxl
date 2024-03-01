<h1>My Users<h1>

@foreach($users as $user)
    <a href="/users/{{$user->id}}">{{$user->name}}</a>
    <hr>
@endforeach