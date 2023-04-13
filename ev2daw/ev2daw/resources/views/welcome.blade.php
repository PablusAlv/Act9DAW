@extends('layout')
@section('title', "Home Page")
@section('content')
    Hello {{auth()->user()->name}}!
@endsection