@extends('layouts.app')
@section('content')
<br>
    <div class="jumbotron text-center">
    <h3>{{$title}}</h3>
    <p>This is My Blog For Learning Laravel Using VS Code & Xampp Server</p>
    @if (Auth::guest())
    <p><a href="/login" role="button" class="btn btn-success btn-lg">Login</a> <a href="/register" role="button" class="btn btn-primary btn-lg">Register</a></p>
    @else
    <p><a href="/dashboard" role="button" class="btn btn-success btn-lg">Check Dashboard</a> <a href="/posts" role="button" class="btn btn-primary btn-lg">See Posts</a></p>
    @endif
    </div>
@endsection

