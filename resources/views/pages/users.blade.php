@extends('pages.dashboard');
@section('title','pagetitle');
@section("sidebar")
@parent
<p>appended to the master parent</p>
@endsection
<html>
@foreach($users as $user)
    {{$user->username}}
@endforeach  

</html
