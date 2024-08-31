@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <h1 class="title">add pizza</h1>
        <form class="row g-3" method="post" action="{{ route('pizzas.index') }}">
            @csrf

            <div class="col-md-4">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" autofocus required>
            </div>


            <div class="col-md-4">
                <label for="type" class="form-label">Pizza</label>
                <select id="type" class="form-select" name="type" required>
                    <option selected value="">Choose Pizza...</option>
                    {{--                    @includeIf('includes.dropdown', ['list' => $pizzas, 'fieldName' => 'pizzas'])--}}
                    @foreach($pizzas as $pizza)
                        <option value="{{ $pizza->type }}">{{ $pizza->type }}</option>
                    @endforeach
                </select>
            </div>


            <div class="col-md-4">
                <label for="base" class="form-label">Crust</label>
                <select id="base" class="form-select" name="base" required>
                    <option selected value="">Choose Base...</option>
                    @includeIf('includes.dropdown', ['list' => $bases, 'fieldName' => 'base'])

                </select>
            </div>


            <div class="col-md-4">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" id="price" name="price" required>
            </div>


            <div>
                <h3>Toppings</h3>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="toppings[]" value="peppers" id="peppers">
                    <label class="form-check-label" for="peppers">
                        Peppers
                    </label>
                </div>


                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="toppings[]" value="olives" id="olives">
                    <label class="form-check-label" for="olives">
                        Olives
                    </label>
                </div>

            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Order Pizza</button>
            </div>
        </form>
    </div>
@endsection
