<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
  public function index()
  {

    /*  $pizzas = [
            ['type' => 'hawailan','base'  => 'cheesy crust'],
            ['type' => 'volcano','base'  => 'garlic crust'],
            ['type' => 'veg superme','base'  => 'thin & crispy']
      
         ];
            */
    //this code for  model  use
    //$pizzas = Pizza::all();
    $pizzas = Pizza::orderBy('name', 'desc')->get();

    return view('pizzas.index', [
      'pizzas' => $pizzas,

    ]);
  }

  public  function show($id)
  {

    //return view('pizzas.show' , ['id' =>$id]); 

    $pizza = Pizza::findOrFail($id);
    return view('pizzas.show', ['pizza' =>  $pizza]);
  }

  public  function create()
  {
        $data = Pizza::all();
    return view('pizzas.create' ,['data' =>$data]);

  }
  public function store()
  {
     /* error_log (request ('name'));
      error_log (request ('type'));
      error_log (request ('base'));
      */
     $pizza = new Pizza();
      $pizza -> name = request('name');
      $pizza -> type = request('type');
      $pizza -> base = request('base');
      $pizza -> toppings = request('toppings');

      $pizza->save();
return redirect('/')-> with('msg', 'thanks for your  order') ;
      
      
      //return redirect('/')-> with('msg', 'thanks for your  order');
  }

  public function destroy($id) {
    $pizza = Pizza::findOrFail($id);
    $pizza->delete();
    return redirect('/pizzas');
  }
}
