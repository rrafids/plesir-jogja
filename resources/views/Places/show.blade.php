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
            mapboxgl.accessToken = 'pk.eyJ1IjoicnJhZmlkczE3IiwiYSI6ImNrM2F4dXZrYjA3ajgzbG51M3JrMXR6bnUifQ.ja3BRkAopqWe8Mv7nsj0Ow&libraries=places';
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
                <button class="btn btn-success" data-toggle="modal" data-target="#BeliTiket" id="Beli" style="width: 370px">Beli Tiket</button>
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

<div class="container" style="background-color: #E8FAF2">
  <div style="font-size: 20px; padding-top:  15px; padding-bot: -15px;">
    <b>Ulasan</b>  
  </div>
    @if (Auth::check())
    <form action="{{route('comments.store')}}" method="post">
    {{ csrf_field() }}
    <br>
      <hr>
      <label for="komen" style="font-size: 15px">
          <b>Tulis Komentar</b>
      </label>
      <br>
      <label style="font-size: 15px">
        <b style="font-size: 15px">Beri Bintang: </b>
      </label>
      <span class="fa fa-star"></span>
      <span class="fa fa-star"></span>
      <span class="fa fa-star"></span>
      <span class="fa fa-star"></span>
      <span class="fa fa-star"></span>
      <br>
      <textarea class="form-control" name="content" id="komen" rows="3"></textarea>
      <input type="hidden" name="place_id" value="{{$place->id}}"> <br>
      <button class="btn btn-primary float-right my-20" type="submit">Submit</button>
    </form>
    @endif
  
    <br><br>
    
    @foreach ($place->comments as $comment)
      <div class="card">
        <h5 class="card-header">{{ $comment->user->name }}</h5>
        <div class="card-body">
          <h5 class="card-title">{{ $comment->content }}</h5>
          {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
        </div>
      </div>
      <hr>
    @endforeach
</div>

<div class="modal fade" id="BeliTiket" tabindex="-1" role="dialog" aria-labelledby="BeliTiketLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="BeliTiketLabel">Pembelian Tiket</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action ="show.blade.php" method ="POST">
        <h5>Deskrpisi Tiket</h5>
        Tiket ke : {{ $place->nama }} <br>
        Harga    : Rp {{ $place->harga_tiket}} <br>
        Booking ID :<?php echo rand() . "\n"; ?>
        <br>
        <br>
        <h5> Data Diri :</h5>
        <br>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nama :</label>
            <input type="text" class="form-control" name ="Nama">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Email:</label>
            <input type="text" class="form-control"name="Email">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Nomor Telepon:</label>
            <input type="text" class="form-control" name="NoTelp">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#KonfirmBeli" id ="Konfirm">Beli</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="KonfirmBeli" tabindex="-1" role="dialog" aria-labelledby="KonfirmBeliLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="KonfirmBeliLabel">Pembelian Tiket</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <script type="text/javascript">
            
            </script>
        <form>
        <h5>Deskrpisi Tiket</h5>
        Tiket ke : {{ $place->nama }} <br>
        Harga    : Rp {{ $place->harga_tiket}} <br>
        Booking ID :<?php echo rand() . "\n"; ?>
        <br>
        <br>
        <h5> Data Diri :</h5>
        <br>
          <div class="form-group">
            {{-- <input for="message-text" class="col-form-label"value="{{$Nama}}" > --}}
          </div>
          <div class="form-group">
            <input type="text" class="form-control" value="Email">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="NoTelp">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Konfirmasi</button>
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
    $('#Konfirm').on('click', function () {
      $('#KonfirmBeli').modal({
        show: true
      });
    });

    $(document).on('show.bs.modal', '.modal', function () {
			var zIndex = calculateZIndex();

			$(this).css('z-index', zIndex);

			setTimeout(function () {
				$('.modal-backdrop').not('.modal-stack').css('z-index', zIndex - 1).addClass('modal-stack');
			}, 0);
		})
		$(document).on('hidden.bs.modal', '.modal', function () {
			$('.modal:visible').length && $(document.body).addClass('modal-open');
		})
		function calculateZIndex() {
			var zIndex = Math.max.apply(null, Array.prototype.map.call(document.querySelectorAll('*'), function (el) {
				return +el.style.zIndex;
			})) + 10;

			return zIndex;
		}
});
    </script>
@endsection