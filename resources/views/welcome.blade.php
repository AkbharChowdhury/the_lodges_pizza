@extends('layouts.app')
@section('title')
     Welcome to  {{ config('app.name') }}
@endsection
@section('content')
{{--    <img src="/img/logo.png" class="img-fluid"  alt="{{ config('app.name') }} logo">--}}
   <div class="container">
       <p> {{ session('message') }}</p>

       <a href="{{ route('pizzas.create') }}" class="btn btn-primary" role="button">Order a pizza</a>
   </div>

@endsection
