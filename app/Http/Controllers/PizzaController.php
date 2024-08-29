<?php

namespace App\Http\Controllers;

use App\Models\Base;
use App\Models\Pizza;
use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index()
    {


        $pizzas = Pizza::orderBy('name')->distinct()->get();
//        $pizzas = Pizza::all();
//        $pizzas = Pizza::where('type','Hawaiian')->get();
//        $pizzas = Pizza::latest();
        return view('pizzas.index', compact('pizzas'));
    }

    public function show($id)
    {
        $pizza = Pizza::findOrFail($id);
        return view('pizzas.show', compact('pizza'));
    }

    public function create()
    {
        $pizzas =  Pizza::distinct()->orderBy('type')->get(['type']);
        $bases = Base::orderBy('base')->get(['base']);
        return view('pizzas.create', compact('pizzas', 'bases'));
    }

    public function store()
    {

        $pizza = Pizza::create([
            'name' => request('name'),
            'type' => request('type'),
            'base' => request('base'),
            'price' => request('price'),
            'toppings' => request('toppings'),



        ]);
//        error_log($pizza);
        return redirect('/')->with('message', 'thanks for your order');

    }

    public function destroy($id)
    {
        $pizza = Pizza::findOrFail($id);
        $pizza->delete();
        return redirect(route('pizzas.index'));
    }

//    private function getPizzas(): array
//    {
//        return [
//            [
//                'type' => 'Hawaiian',
//                'base' => 'cheesy crust',
//            ],
//
//            [
//                'type' => 'Volcano',
//                'base' => 'Garlic crust',
//            ],
//            [
//                'type' => 'Veg supreme',
//                'base' => 'Thin & crispy',
//            ],
//
//
//        ];
//
//    }
}
