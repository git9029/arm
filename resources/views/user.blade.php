@extends('main')

@section('content')
<h2>Użytkownik z id {{$id}}</h2>
<p>{{Auth::user()->login}}</p>
@if(Auth::user()->login == 'sysuser')
    <p>test</p>
@endif
@endsection