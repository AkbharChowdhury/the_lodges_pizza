@extends('layouts.app')
@section('content')
    <div class="container-fluid">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb text-capitalize">
                <li class="breadcrumb-item"><a href="{{ route('pizzas.index') }}">All pizzas</a></li>
                <li class="breadcrumb-item active" aria-current="page">pizza order details</li>
            </ol>
        </nav>


        <h1 class="title">pizza order for {{ $pizza->name }}</h1>

        <div class="progress" role="progressbar" aria-label="Warning example" aria-valuenow="75" aria-valuemin="0"
             aria-valuemax="100">
            <div class="progress-bar bg-warning text-dark" style="width: 75%">75%</div>
        </div>
        <div class="card w-75 mb-3">
            <div class="card-body">

                <div class="float-end"><span class="badge text-bg-warning float-md-end">Pending</span><br>
                    <p class="text-muted pt-2">10-15 mins</p>
                </div>


                <h3 class="card-title"><strong>{{ $pizza->type }} ({{ $pizza->base }})</strong></h3>
                @if($pizza->toppings)
                    <h3>Extra toppings:</h3>
                    <ul>
                        @foreach($pizza->toppings as $topping)
                            <li class="text-capitalize"> {{ $topping }}</li>
                        @endforeach
                    </ul>
                @endif

                <form action="{{ route('pizzas.destroy',  $pizza->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-success text-capitalize" value="complete order">
                </form>
            </div>
        </div>

    </div>

@endsection
