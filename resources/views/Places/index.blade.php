@extends('layouts.app')

@section('content')

{{-- <img src="{{ url('/images/hutran.jpg') }}" alt="" style="width: 100%; height: 500px; margin-top: -15px"> --}}
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" style="margin-top: -120px">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="{{ url('/images/hutran.jpg') }}" class="d-block w-100" alt="..." style="width: 100%; height: 700px;">
        </div>
        <div class="carousel-item">
            <img src="{{ url('/images/sungai.jpg') }}" class="d-block w-100" alt="..." style="width: 100%; height: 700px;">
        </div>
        <div class="carousel-item">
            <img src="{{ url('/images/rumah.jpg') }}" class="d-block w-100" alt="..." style="width: 100%; height: 700px;">
        </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="container">
        <h2 class="px-3 py-3" style="font-size: 45px; position: absolute; background-color: green; margin-top: -400px; color: white; z-index: 2">
            <b>Cari</b> Wisata Tujuanmu
        </h2>
        <h2 class="px-3 py-3" style="font-size: 45px; position: absolute; background-color: white; margin-top: -320px; color: green; z-index: 2">
            <b>Beli</b> Tiketnya
        </h2>
        <div class="row">
            <div class="col-30">
                <div class="input-group ml-2 mb-5" style="width: 1090px; margin-top: -100px; margin-bot: 100px">
                    <input type="search" class="cari form-control" placeholder="Cari Obyek Wisata..." name="search" id="search" style="height: 60px; font-size: 20px; z-index: 2">
                </div> <br> <br> <br>
                <h2 style="color: green; font-weight: bold; text-align: center">Destinasi Populer di Jogja</h2>
                <br> <br>  
                <ul class="list-inline" id="tabel">
                    @foreach($places as $place)
                            <li class="list-inline-item my-3 mx-2">
                                <div class="card" style="width: 25rem">
                                    <img src="/images/{{ $place['gambar'] }}" class="card-img" style="width: 350px; height: 300px;" alt="...">
                                    <div class="card-body" style="margin-top: -150px; color: white">
                                        <a href="/places/{{ $place->id }}" ><h2 style="color: white; font-weight: bold" class="card-img-top">{{ $place['nama'] }}</h2></a> <br>
                                        <br>
                                        <a href="/places/{{ $place->id }}" class="btn btn-primary" style="margin-left: 220px">Lihat Detail</a>
                                    </div>
                                </div>
                            </li>
                    @endforeach
                </ul>  
            </div>
        </div>
    </div>
@endsection







