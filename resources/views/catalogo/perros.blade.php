@extends('layaut.master')
@section('content')

<h1> {{ $msg }} </h1>

<h2> Alimento para perros </h2>
<ul>
@foreach ($alm as $a)
   <li> {{ $a }} </li>
@endforeach
</ul>

<h2> Alimento humedo  </h2>
<ul>
@foreach ($hum as $j)
   <li> {{ $j }} </li>
@endforeach
</ul>
<h2> correas</h2>
<ul>
@foreach ($cor as $c)
   <li> {{ $c }} </li>
@endforeach
</ul>

@stop

