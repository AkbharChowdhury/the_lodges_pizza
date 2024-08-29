@extends('layouts.layout')
@section('content')
    <h1 class="title">pizza order for {{ $pizza->name }}</h1>
    <p>{{ $pizza->type }} ({{ $pizza->base }})</p>

    @if($pizza->toppings)
        <h3>Extra toppings:</h3>
        <ul>
            @foreach($pizza->toppings as $topping)
                <li> {{ $topping }}</li>
            @endforeach
        </ul>
    @endif
    <form action="{{ route('pizzas.destroy',  $pizza->id) }}" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" value="complete order">
    </form>

    <a href="{{ route('pizzas.index') }}">Back to all pizzas</a>

@endsection
