@extends('layouts/app')

@section('content')

<div class="container py-5">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        @foreach ($trains as $train)
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">ID: {{$train->id}}</h5>
                    <p class="card-text">Company: {{$train->azienda}}</p>
                    <p class="card-tex d-flex flex-column">
                        <span>Departures Station: {{$train->stazione_di_partenza}}</span>
                        <span>Departures Date: {{$train->orario_di_partenza}}</span>
                        <span>Arrivals Date: {{$train->orario_di_arrivo}}</span>
                        <span> Arrivals Station: {{$train->stazione_di_arrivo}}</span>
                        <span> Train Code: {{$train->codice_treno}}</span>
                        <span> Carriage N.: {{$train->numero_carrozze}}</span>
                        <span> In time: {{$train->in_orario}}</span>
                        <span> Cancelled: {{$train->cancellato}}</span>






                    </p>
                </div>
            </div>
        </div>
        @endforeach

@endsection