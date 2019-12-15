@extends('layouts.app')
@section('content')

<div class="container">
    <h2><b>{{ $place->nama }}</b></h2>

    <div class="star-rating">
      <h4 >
        <b style="color: green">{{ $place->rating }}</b> / 5  
      </h4>
      <h5 class="py-1 px-1" style="border: green solid 1px; width: 69px; color: green">{{ $place->reviews }} Ulasan</h5>
    </div>

    <ul class="list-inline my-3">
        <li class="list-inline-item" >
            <img src="/images/{{ $place['gambar'] }}" alt="..." style="width: 697px; height: 455px; margin-top: -407px;">
        </li>
        <li class="list-inline-item">
          <div id='map' style="width: 400px; height: 225px; z-index: 0"></div>
          <script src='https://unpkg.com/es6-promise@4.2.4/dist/es6-promise.auto.min.js'></script>
          <script src="https://unpkg.com/@mapbox/mapbox-sdk/umd/mapbox-sdk.min.js"></script>
          <script>
            mapboxgl.accessToken = 'pk.eyJ1IjoicnJhZmlkczE3IiwiYSI6ImNrM2F4dXZrYjA3ajgzbG51M3JrMXR6bnUifQ.ja3BRkAopqWe8Mv7nsj0Ow';
            var mapboxClient = mapboxSdk({ accessToken: mapboxgl.accessToken });
            mapboxClient.geocoding.forwardGeocode({
              query: '{{ $place->map }}, Yogyakarta, Indonesia',
              autocomplete: false,
              limit: 1
            })
              .send()
              .then(function (response) {
                if (response && response.body && response.body.features && response.body.features.length) {
                  var feature = response.body.features[0];    
                  var map = new mapboxgl.Map({
                    container: 'map',
                    style: 'mapbox://styles/mapbox/streets-v11',
                    center: feature.center,
                    zoom: 10
                  });
                  new mapboxgl.Marker()
                  .setLngLat(feature.center)
                  .addTo(map);
                }
              }); 
            </script>
            <br>
            <h5 style="border: solid 1px #78FFC4; margin-top: -10px; padding: 10px; padding-left: 15px">
                <b><i class="clock icon"></i> Jam Operasional</b> <br>  <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{ $place->buka }}-{{ $place->tutup }} <br>
                <hr>
                <i class="money bill alternate icon"></i>
                <b>Tiket</b> <br> <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Rp {{ $place->harga_tiket}} <br>
                <hr>
                <button class="btn btn-success" data-toggle="modal" data-target="#BeliTiket" id="Beli" style="width: 370px">Beli Tiket</button>
            </h5>
        </li>
    </ul>
    <ul class="list-inline">
        <li class="list-inline-item" style="height: 150px; background-color: #EFFBFB; padding: 20px;">
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

<div class="container" style="background-color: #EFFBFB"> <br>
  <div style="font-size: 23px; padding-top:  15px; padding-bot: -15px;">
    &nbsp;
    <i class="envelope open outline icon"></i>
    <b>Ulasan</b>  
  </div>
    @if (Auth::check())
    <form action="{{route('comments.store')}}" method="post">
    {{ csrf_field() }}
    <br>
      <hr>
      <label for="komen" style="font-size: 15px">
        <i class="edit icon"></i>
        <b>Tulis Komentar</b>
      </label>
      <br>
      <div class="star-rating"> 
          &nbsp;&nbsp;&nbsp;
          <span class="fa fa-star-o" data-rating="1"></span>
          <span class="fa fa-star-o" data-rating="2"></span>
          <span class="fa fa-star-o" data-rating="3"></span>
          <span class="fa fa-star-o" data-rating="4"></span>
          <span class="fa fa-star-o" data-rating="5"></span>
          <input type="hidden" name="rating" class="rating-value" value="4" required>
      </div> <br>
      <textarea class="form-control mx-4 " style="width: 1030px" name="content" id="komen" rows="3" placeholder="Tuliskan tentang obyek wisata ini" required></textarea>
      <input type="hidden" name="place_id" value="{{$place->id}}"> <br>
      <button class="btn btn-primary float-right" style="margin-right: 30px" type="submit">Submit</button>
    </form>
    @else 
    <div class="mx-5 my-3">
      <h4><b>Login</b> Untuk Memberi Ulasan</h4>
      <a class="btn btn-success" href="{{ route('login') }}" style="font-size: 15px;">{{ __('Login') }}</a>
    </div>
    @endif
  
    <br><br><br>

    @foreach ($place->comments as $comment)
      <div class="card">
        <h4 class="card-header">
          <i class="user circle icon"></i>
          <b>{{ $comment->user->name }}</b> 
        </h4>
        <h5 class="card-header">{{ $comment->created_at }}</h5>
        <div class="card-body">
          <h5 class="card-title">{{ $comment->content }}</h5> <br>
          {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
        </div>
      </div>
      <hr>
    @endforeach
</div>

<div class="modal fade center" id="BeliTiket" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="BeliTiketLabel"><b><i class="green ticket alternate icon"></i> Pembelian Tiket </b></h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action ="show.blade.php" method ="POST" style="font-size: 15px">
          <b>Obyek Wisata :</b> {{ $place->nama }} <br>
          <b>Harga    :</b> Rp {{ $place->harga_tiket }} <br>
          <b>ID Pemesanan :</b>
          @php
              $id_pemesanan = rand() 
          @endphp
          {{ $id_pemesanan }}
          <br>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button data-toggle="modal" data-target="#konfirmasi" data-dismiss="modal" type="submit" class="btn btn-primary" id ="Konfirm">Beli</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade center" id="konfirmasi" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">
          Pembelian Tiket Berhasil
          <i class="green check icon"></i>
        </h3>
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-footer">
        <form action="/buyticket" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id_pemesanan" value="{{ $id_pemesanan }}">
            <input type="hidden" name="place_id" value="{{ $place->id }}">
            <input type="hidden" value="{{ rand() }}" name="kode_tiket">
            <button type="submit" data-toogle="modal" class="btn btn-primary">Ok</button>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
$(document).ready(function () {
    /* Launch modals */
    $('#Beli').on('click', function () {
      $('#BeliTiket').modal({
        show: true
      });
    });

    $('#konfirm').on('click', function () {
      $('#konfirmasi').modal({
        show: true
      });
    });
});

var $star_rating = $('.star-rating .fa');

var SetRatingStar = function() {
  return $star_rating.each(function() {
    if (parseInt($star_rating.siblings('input.rating-value').val()) >= parseInt($(this).data('rating'))) {
      return $(this).removeClass('fa-star-o').addClass('fa-star');
    } else {
      return $(this).removeClass('fa-star').addClass('fa-star-o');
    }
  });
};

$star_rating.on('click', function() {
  $star_rating.siblings('input.rating-value').val($(this).data('rating'));
  return SetRatingStar();
});

SetRatingStar();
$(document).ready(function() {

});
</script>
@endsection