@extends('layouts.appAdmin')
@section('content')
<div class="container mt-4">
            <div class="card mt-2">
                <div class="card-header text-center">
                    <h2><strong>Data Obyek Wisata</strong></h2>
                </div>
                <div class="card-body">
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <input class="form-control" type="search" id="search" placeholder="Search" aria-label="Search" style="width: 350px">
                        </li>
                        <li class="list-inline-item" style="margin-left: 540px">
                            <a href="{{route('adminPlaces.create')}}" class="btn btn-primary">
                                <i class="plus icon"></i>
                                Tambah Obyek Wisata
                            </a>
                        </li>
                    </ul>
                    <table class="table table-bordered table-hover table-striped" style="font-size: 15px; text-align: center" align="center">
                        <thead>
                            <tr>
                                <th scope="col" style="font-size: 17px;">ID</th>
                                <th scope="col" style="font-size: 17px;">Nama</th>
                                <th scope="col" style="font-size: 17px;">Operasional</th>
                                <th scope="col" style="font-size: 17px;">Buka</th>
                                <th scope="col" style="font-size: 17px;">Tutup</th>
                                <th scope="col" style="font-size: 17px;">Tiket</th>
                                <th scope="col" style="font-size: 17px;">Gambar</th>
                                <th scope="col" style="font-size: 17px; width: 150px">Aksi</th>
                            </tr>
                        </thead>
                        @php
                            $no=1;
                        @endphp
                        <tbody id="tabel">
                            @foreach($place as $p)
                            <tr style="position: center center">
                                <td style="text-align: center center">{{$no++}}</td>
                                <td>{{ $p->nama }}</td>
                                <td>{{ $p->hari }}</td>
                                <td>{{ $p->buka}}</td>
                                <td>{{ $p->tutup }}</td>
                                <td>Rp {{ $p->harga_tiket}}</td>
                                <td><img width="150px" height="90px" src="{{ url('/images/'.$p->gambar) }}"></td>

                                <td style="font-size: 20px">
                                    <a href="{{ route('adminPlaces.edit', $p->id) }}"><i class="blue edit icon"></i></a> |
                                    <form action="{{ route('adminPlaces.destroy', $p->id)}}" method="post" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" style="background-color: transparent; border: 0;" onclick="return confirm('Yakin hapus');"><i class="red trash alternate icon"></i></button>
                                    </form>   
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        
                    </table>
                    {{ $place->links() }}
                </div>
            </div>
        </div>
@endsection