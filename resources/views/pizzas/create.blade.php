@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <h1 class="title">add pizza</h1>
        <form action="/pizzas" method="post">
            @csrf
            <label for="name">name</label>
            <br>
            <input type="text" name="name" id="name" placeholder="your name" autofocus>
            <p>

            </p>
            <label for="type">Select Pizza</label>
            <select name="type" id="type">
                <option value="">Select Pizza...</option>
                @foreach($pizzas as $pizza)
                    <option value="{{ $pizza->type }}">{{ $pizza->type }}</option>
                @endforeach
            </select>
            <br>
            <label for="base">Select Crust</label>
            <select name="base" id="base">
                <option value="">Select Crust...</option>
                @includeIf('includes.dropdown', ['list' => $bases, 'fieldName' => 'base'])
            </select>
            <br>
            <label for="price">price</label>
            <br>
            <input type="text" name="price" id="price" placeholder="price">


            <fieldset>
                <label for="">Extra toppings</label>
                <input type="checkbox" name="toppings[]" value="garlic">garlic<br>
                <input type="checkbox" name="toppings[]" value="mushrooms">olives<br>
                <input type="checkbox" name="toppings[]" value="peppers">peppers<br>


            </fieldset>


            <input type="submit" value="Order Pizza">
        </form>

    </div>
@endsection
