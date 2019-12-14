@extends('layouts.app')
@section('content')
<div class="container mt-4">
            <div class="card mt-2">
                <div class="card-header text-center">
                    <h2><strong>Jadwal Anda</strong></h2>
                </div>
                <div class="card-body">
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <input class="form-control" type="search" placeholder="Search" aria-label="Search" style="width: 350px">
                        </li>
                        <li class="list-inline-item" style="margin-left: 540px">
                            <a href="{{route('schedules.create')}}" class="btn btn-primary">
                                <i class="plus icon"></i>
                                Tambah Jadwal
                            </a>
                        </li>
                    </ul>
                    @if($user->schedules)
                    @foreach ($user->schedules as $p)
                    <table class="table table-bordered table-hover table-striped" style="font-size: 15px; text-align: center" align="center">
                            <thead>
                                <tr>
                                    <th colspan="2" class="w-50">{{date('d-m-Y', strtotime($p->date->date))}}</th>
                                    @php
                                        $date = date('d-m-Y', strtotime($p->date->date));
                                    @endphp
                                    <th colspan="2" class="w-35" id="demo">Waktu</th>
                                    <th>
                                        <form action="{{ route('Dates.destroy', $p->id)}}" method="post" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" style="background-color: transparent; border: 0;" onclick="return confirm('Yakin hapus');"><i class="red trash alternate icon"></i></button>
                                        </form>  
                                    </th>

                                </tr>
                                <tr>
                                    <th scope="col" style="font-size: 17px;" class="w-25">Destinasi</th>
                                    <th scope="col" style="font-size: 17px;" class="w-25">Hari</th>
                                    <th scope="col" style="font-size: 17px;">Mulai</th>
                                    <th scope="col" style="font-size: 17px;">Sampai</th>
                                    <th scope="col" style="font-size: 17px; width: 150px">Aksi</th>
                                </tr>
                            </thead>
                        @php
                        $no=1;
                        @endphp
                        <tbody>
                            <tr style="position: center center">
                                    
                                {{-- <td>{{ Carbon\Carbon::parse($p->date['date'])->format('d-m-Y') }}</td> --}}
                                <td>{{ $p->places->nama }}</td>
                                <td>{{ $p->day }}</td>
                                <td>{{ $p->hourStart }}</td>
                                <td>{{ $p->hourEnd}}</td>
                                <td style="font-size: 20px">
                                    <a href="{{ route('schedules.edit', $p->id) }}"><i class="blue edit icon"></i></a> |
                                    <form action="{{ route('schedules.destroy', $p->id)}}" method="post" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" style="background-color: transparent; border: 0;" onclick="return confirm('Yakin hapus');"><i class="red trash alternate icon"></i></button>
                                        </form>   
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    @endforeach
                    @else
                        <h2>Belum ada jadwal</h2>
                        <button class="btn btn-success">Buat Jadwal</button>
                    @endif
                </div>
            </div>
        </div>
@endsection