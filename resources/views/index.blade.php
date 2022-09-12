@extends('layouts.main')

@section('title', 'Homepage')

@section('main-content')

<main class="text-center">

    <h1>LISTA DATABASE TRENI</h1>

    <ul>
        @forelse ($trains as $train)

       <li>
        Il treno <strong>{{$train->train_code}} </strong> da <strong>{{$train->departure_destination}} </strong> e diretto a <strong>{{$train->arrival_destination}}</strong>
        è in partenza alle ore <strong>{{ dateTime('d-m-Y', strtotime($train->departure_time)) }}</strong> e arriverà alle ore <strong>{{$train->arrival_time}}</strong>
       </li>

        @empty

        <p>Nessun treno trovato</p>

        @endforelse
    </ul>


</main>

@endsection
