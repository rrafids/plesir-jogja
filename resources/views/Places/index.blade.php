@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-30">
                <h1 class="my-3 mx-3" style="font-weight: bold">
                    <img src="/images/place.png" alt="" style="width: 35px">
                    Obyek Wisata
                </h1>
                <div class="input-group mt-5 mb-4" style="width: 535px">
                    <input type="search" class="cari form-control ml-3" placeholder="Cari Obyek Wisata..." name="search" id="search">
                    <div class="input-group-append">
                        <span class="input-group-text" id="basic-addon2">Search</span>
                    </div>
                </div>
                <ul class="list-inline">
                    @foreach($places as $place)
                    <li class="list-inline-item my-3 mx-3">
                        <div class="card" style="width: 18rem">
                            <img src="/images/{{ $place['gambar'] }}" class="card-img-top" style="width: 250px; height: 150px" alt="...">
                            <div class="card-body">
                                <a href="/places/{{ $place->id }}" class="my-5"><h5 class="card-title">{{ $place['nama'] }}</h5></a>
                                <p class="card-text" style="height: 180px">{{ $place['deskripsi'] }}</p>
                                <p class="card-text">{{ $place['jam_operasional'] }}</p>
                                <p class="card-text">Rp {{ $place['harga_tiket'] }}</p>
                                <a href="#" class="btn btn-primary">Beli Tiket</a>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>  
                <table>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection







