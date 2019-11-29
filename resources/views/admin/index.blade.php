@extends('layouts.app')

@section('content')
<div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    Data Destinasi Wisata
                </div>
                <div class="card-body">
                    <a href="{{route('admin.create')}}" class="btn btn-primary">Input Pegawai Baru</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Destinasi Wisata</th>
                                <th scope="col">Hari Buka</th>
                                <th scope="col">Jam Buka</th>
                                <th scope="col">Jam Tutup</th>
                                <th scope="col">Harga Tiket</th>
                                <th scope="col">Tempat Umum</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Gambar</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        @php
                            $no=1;
                        @endphp
                        <tbody>
                            @foreach($place as $p)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{ $p->nama }}</td>
                                <td>{{ $p->hari }}</td>
                                <td>{{ $p->buka}}</td>
                                <td>{{ $p->tutup }}</td>
                                <td>{{ $p->harga_tiket}}</td>
                                <td>{{ $p->tempat_umum }}</td>
                                <td>{{ $p->deskripsi}}</td>
                                <td><img width="150px" src="{{ url('/images/'.$p->gambar) }}"></td>

                                <td>
                                <a href="{{ route('admin.edit', $p->id) }}" class="btn btn-warning" >Edit</a>
                                <form action="{{ route('admin.destroy', $p->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Hapus</button>
                                  </form>   
                            
                            </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @endsection