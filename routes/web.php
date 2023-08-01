<?php

use App\Http\Controllers\PizzaController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {
   return view('welcome');
 });
 
// this is route make for pizzas.blade.php
/*Route::get('/pizzas', function () {
   // return view('pizzas');
// this us when we not get data from database  this used when we passing data to blade file..
 //  return view('pizzas', ['type' => 'hawaiian', 'base'=>'cheesy crust']);
   // if we want  many value access than we make one variable and store value in this array 
  /* $pizza = [
      'type' => 'hawaiian', 
      'base'=>'garlic crust',
      'price'=> 10,
   ];*/

  /* $pizzas = [
      ['type' => 'hawailan','base'  => 'cheesy crust'],
      ['type' => 'volcano','base'  => 'garlic crust'],
      ['type' => 'veg superme','base'  => 'thin & crispy']

   ];
      //this for query parameter  we use  request 
      $name = request('name');
      
      //this for query parameter  we use  request 
    return view('pizzas' , [
      'pizzas' => $pizzas,
      'name' => $name ,
      //this is also way for query parameter
      'age' => request('age')
   ]);
});


Route::get('/pizzas/{id}', function () {
   
    //return view('details' , ['id' =>$id]); // this is only formate we not send array value
});


*/
// this route using controller
Route::get('/pizzas',[PizzaController::class, 'index']);
Route::get('/pizzas/create',[PizzaController::class, 'create']);
Route::post('/pizzas',[PizzaController::class, 'store']); // this route use to send data into database
Route::get('/pizzas/{id}',[PizzaController::class, 'show']);
Route::delete('/pizzas/{id}',[PizzaController::class, 'destroy']);
//Route::get('/pizzas/create',[PizzaController::class, 'create']);  this here is this override the  above route to solve this issue we place this route in the above the route 




