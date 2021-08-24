@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <p>This is a Laravel application from "Laravel From Scratch" tutorial.</p>
        <p><a href="/login" class="btn btn-primary btn-lg" role="button">Login</a> <a href="/register" class="btn btn-primary btn-lg">Register</a></p>
    </div>
@endsection