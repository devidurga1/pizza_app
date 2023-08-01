@extends('layouts.layout')

@section('content')
   <!-- <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
               Add a new pizza
            </div>
          </div>
        </div>-->
        <div class="wrapper create-pizza">
  <h1>Create a New Pizza</h1>
  <form action="/pizzas" method="POST">
     @csrf
    
    <label for="name">Your name:</label>
    <input type="text" name="name" id="name" required>
   <!-- <label for="type">Choose type of pizza:</label>
    <select name="type" id="type">
      <option value="margarita">Margarita</option>
      <option value="hawaiian">Hawaiian</option>
      <option value="veg supreme">Veg Supreme</option>
      <option value="volcano">Volcano</option>
    </select>-->

    
    <select name="type" >
    <option value="">Select an type-option</option>
      @foreach($data as $row)
      <option value="{{$row->type}}"> {{$row->type}}</option>
       @endforeach
    </select>

    
    <select name="base" id="base">
    <option value="">Select an  base-option</option>
    @foreach($data as $row)
      <option value="{{$row->base}}"> {{$row->base}}</option>
       @endforeach
    </select>
    <fieldset>
    <label>Extra toppings:</label>
    <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms</br>
    <input type="checkbox" name="toppings[]" value="pepers">pepers</br>
    <input type="checkbox" name="toppings[]" value="garlic">garlic</br>
    <input type="checkbox" name="toppings[]" value="olives">olives</br>
    </fieldset>
     <input type="submit" value="Order Pizza">
  </form>
</div>
 @endsection