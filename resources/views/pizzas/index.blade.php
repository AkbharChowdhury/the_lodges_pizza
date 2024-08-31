@extends('layouts.app')
@section('content')
   <div class="container-fluid">
       <h1 class="title">pizza list</h1>



       </div>
       @forelse ($pizzas as $pizza)


           <div class="card mb-3" style="width: 18rem;">
               <div class="card-body">
                   <h2 class="text-capitalize">{{ $pizza->type }} ({{ $pizza->base }})</h2>
                   <p class="card-text text-capitalize"> <strong>{{ $pizza->name }}</strong></p>
                   <a href="{{ route('pizzas.show', $pizza->id) }}" class="btn btn-primary stretched-link">view</a>
               </div>
           </div>

       @empty
           <p>No pizzas</p>
       @endforelse
   </div>
@endsection
