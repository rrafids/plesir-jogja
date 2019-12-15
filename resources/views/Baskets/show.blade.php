@extends('layouts.app')

@section('content')

<div class="container">
    <div>
        <div class="card card-body">
            <div class="card-body">
              <h4 class="card-title">
                Tiket Saya
                <i class="green ticket alternate icon"></i> <br> <br>
              </h4>
              <input type="search" class="cari form-control ml-3" placeholder="Cari Tiket..." name="search" id="search" style="width: 250px">
              
              <ul class="list-inline" id="tabel">
                    @foreach($user->tickets as $ticket)
                            <li class="list-inline-item my-3 mx-3">
                                    <div class="card" style="width: 16rem">
                                      <img src="/images/{{ $ticket->place->gambar }}" class="card-img-top" style="width: 223px; height: 100px" alt="...">
                                        <div class="card-body">
                                            <a><h5 class="card-title"><b>{{ $ticket->place->nama }}</b></h5></a> <br>
                                            {{-- <p class="card-text"> Kode Tiket: {{ $ticket['kode_tiket'] }}</p> --}}
                                            <p class="card-text"><b>ID Pemesanan: </b>{{ $ticket->id_pemesanan }}</p>
                                            <p type="card-text"><b>Kode Tiket: </b>{{ $ticket->kode_tiket }}</p>
                                            <p class="card-text"><b>Status:</b> Sudah Dibayar 
                                              <i class=" green check circle icon"></i>
                                            </p>                
                                        </div>
                                    </div>
                                </li>
                    @endforeach
            </div>
        </div>
    </div>
</div>


@endsection