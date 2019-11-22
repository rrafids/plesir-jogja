@extends('layouts.app')

@section('content')

<div class="container">
    <h2><b>{{ $place->nama }}</b></h2>
    <h5>Candi</h5>
    <ul class="list-inline">
        <li class="list-inline-item my-3">
            <img src="/images/{{ $place['gambar'] }}" style="width: 1100px; height: 500px;" alt="...">
        </li>
    </ul>
    <ul class="list-inline">
        <li class="list-inline-item p-3" style="background-color: #94C89F">
            <h3 style="color: white">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                {{ $place->deskripsi }}
            </h3>
        </li>
        <li class="list-inline-item my-3">`
            
        </li>
    </ul>
</div>

@endsection