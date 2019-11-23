@extends('layouts.app')
@section('content')

<div class="container">
    <h2><b>{{ $place->nama }}</b></h2>
    <h5>Candi</h5>
    <ul class="list-inline my-3">
        <li class="list-inline-item" >
            <img src="/images/{{ $place['gambar'] }}" alt="..." style="width: 697px; height: 455px; margin-top: -407px;">
        </li>
        <li class="list-inline-item">
            <div id='map' style='width: 400px; height: 300px;'></div>
            <script>
                mapboxgl.accessToken = 'pk.eyJ1IjoicnJhZmlkczE3IiwiYSI6ImNrM2F4dXZrYjA3ajgzbG51M3JrMXR6bnUifQ.ja3BRkAopqWe8Mv7nsj0Ow';
                var map = new mapboxgl.Map({
                    container: 'map',
                    style: 'mapbox://styles/mapbox/streets-v11'
                });
            </script>
            <br>
            <h5 style="border: solid 1px #78FFC4; margin-top: -10px; padding: 10px; padding-left: 15px">
                Buka: {{ $place->buka }}-{{ $place->tutup }} <br>
                <hr>
                Tiket: Rp {{ $place->harga_tiket}} <br>
                <hr>
                <button class="btn btn-success" style="width: 370px">Beli Tiket</button>
            </h5>
        </li>
    </ul>
    <ul class="list-inline">
        <li class="list-inline-item" style="height: 150px; background-color: #E8FAF2; padding: 20px;">
            <h3 class="mb-3">
                <b> Tentang {{ $place->nama }} </b>
                <br>
            </h3>
            <h4>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                {{ $place->deskripsi }}
            </h4>
        </li>
    </ul>
</div>

@endsection