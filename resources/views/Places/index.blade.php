@extends('layouts.app')

@section('content')

{{-- <img src="{{ url('/images/lampu.jpg') }}" alt="" style="width: 2000px; heigth: 100%; position: absolute; margin-top: -125px"> --}}
    <div class="container">
        <div class="row">
            <div class="col-30">
                <h1 class="mt-5 mb-5 ml-2" style="font-weight: bold; color: green">
                    <img src="/images/beach.png" alt="" style="width: 200px"> <br> <br>
                    Obyek Wisata
                </h1> <br> 
                <div class="input-group ml-2" style="width: 300px; margin-top: -20px">
                    <input type="search" class="cari form-control" placeholder="Cari Obyek Wisata..." name="search" id="search">
                </div>
                <ul class="list-inline" id="tabel">
                    @foreach($places as $place)
                            <li class="list-inline-item my-3 mx-2">
                                    <div class="card" style="width: 25rem">
                                        <img src="/images/{{ $place['gambar'] }}" class="card-img" style="width: 350px; height: 300px;" alt="...">
                                        <div class="card-body" style="margin-top: -150px; color: white">
                                            <a href="/places/{{ $place->id }}" ><h2 style="color: white; font-weight: bold" class="card-img-top">{{ $place['nama'] }}</h2></a> <br>
                                            <br>
                                            <a href="/places/{{ $place->id }}" class="btn btn-primary">Lihat Detail</a>
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







