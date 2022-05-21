@extends('layouts.app2')

@section('template_title')
    Maintance
@endsection

@section('content')
    <div class="container" style="font-size: 24px;">
        <h2 style="font-weight: bolder">Conocenos!</h2>
        <p>
            estamos cerca de ti, ven y visitanos.
            Estamos ubicados en la calle 4 # 3 - 28 en el centro de Popayan - Cauca, no pierdas la oportunidad de conocer
            nuestras oficinas locales y
            aprender.
        </p>
    </div>

    <div class="container">
        <div class="antialiased" style="margin: 50px auto">
            <x-maps-leaflet :centerPoint="['lat' => 2.443280, 'long' => -76.608718]" :zoomLevel="24"
                :markers="[['lat' => 2.443280, 'long' => -76.608718]]"></x-maps-leaflet>
        </div>
        <style>
            #defaultMapId {
                height: 100vh;
            }

        </style>
    </div>
@endsection
