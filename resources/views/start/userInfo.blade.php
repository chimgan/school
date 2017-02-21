@extends('layouts.master')

@section('title', 'User info')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <p>{{$user->name . ' && ' . $user->email}}</p>
@endsection
