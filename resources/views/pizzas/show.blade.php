@extends('layouts.layout')

@section('content')
<div class="wrapper pizza-details">
    <h1> Order for {{ $pizza->name }}</h1>
    <p class="type">Type - {{ $pizza->type }} </p>
    <p class="base">base - {{ $pizza->base }} </p>
    <p class="toppings">Extra topping:</p>
    <ul>
        @foreach($pizza->toppings as $toppings)
        <li>{{$toppings}}</li>
        @endforeach
    </ul>

 <form action="/pizzas/{{ $pizza->id }}" method="POST">
  @csrf
  @method('DELETE')
  <button>Comlete Order</button>
 </form>
</div>
<a href="/pizzas" class="back">- Back to all pizzas</a>
@endsection