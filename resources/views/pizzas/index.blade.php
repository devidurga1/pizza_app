@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
  <div class="content">
    <div class="title m-b-md">
      <p> pizza list</p>
    </div>

    <!--  work of loop in blade-->

    <!-- @for($i = 0; $i < count($pizzas); $i++)
        <p>{{ $pizzas[$i]['type'] }}</p>
               @endfor-->
               <!--this code use loop in laravel-->
  <!--@foreach($pizzas as $pizza)
                <div>
                    {{ $loop->index}}  {{ $pizza['type'] }} - {{ $pizza['base'] }}
                    
                    @if($loop->first)
                    <span> first is the loop</span>
                    @endif
                    @if($loop->last)
                    <span> last is the loop</span>
                    @endif
                </div>
               @endforeach-->
               <!-- this foreach for model-->
     @foreach($pizzas as $pizza)
    <div>
      {{ $pizza->name }} - {{ $pizza->type }}-{{ $pizza->base }}
    </div>
    @endforeach
  </div>
</div>
@endsection