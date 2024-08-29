@extends('layouts.layout')
@section('content')
    <h1 class="title">pizza list</h1>
    @forelse ($pizzas as $pizza)
        <h2><a href="{{ route('pizzas.show', $pizza->id) }}">{{ $pizza->name }}</a> </h2>
        <hr>
        <h3>{{ $pizza->type }} ({{ $pizza->base }})</h3>
        <br>
    @empty
        <p>No pizzas</p>
    @endforelse
@endsection
