<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    public function index(){

      /*  $pizzas = [
            ['type' => 'hawailan','base'  => 'cheesy crust'],
            ['type' => 'volcano','base'  => 'garlic crust'],
            ['type' => 'veg superme','base'  => 'thin & crispy']
      
         ];
            */
            //this code for  model  use
            //$pizzas = Pizza::all();
            $pizzas = Pizza::orderBy('name','desc')->get();
            
          return view('pizzas' , [
            'pizzas' => $pizzas,
            
         ]);
    

    }

    public  function show($id){

        return view('details' , ['id' =>$id]); 

    }


    
}
