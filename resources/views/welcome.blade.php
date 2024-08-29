@extends('layouts.layout')
@section('title')
     Welcome to  {{ config('app.name') }}
@endsection
@section('content')
    <img src="/img/logo.png" alt="{{ config('app.name') }} logo">
    <p> {{ session('message') }}</p>
    <a href="{{ route('pizzas.create') }}">Order a pizza</a>
@endsection
