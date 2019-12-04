@extends('layouts.appAdmin')
@section('content')
<div class="container mt-4">
            <div class="card mt-2">
                <div class="card-header text-center">
                    <h2><strong>Data User</strong></h2>
                </div>
                <div class="card-body">
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <input id="search" class="form-control" type="search" placeholder="Search" aria-label="Search" style="width: 350px">
                        </li>
                    </ul>
                    <table class="table table-bordered table-hover table-striped" style="font-size: 15px; text-align: center" align="center">
                        <thead>
                            <tr>
                                <th scope="col" style="font-size: 17px;">ID</th>
                                <th scope="col" style="font-size: 17px;">Nama</th>
                                <th scope="col" style="font-size: 17px;">Email</th>
                                <th scope="col" style="font-size: 17px;">Kedudukan</th>
                                <th scope="col" style="font-size: 17px;">Terdaftar Sejak</th>
                                <th colspan="2" scope="col" style="font-size: 17px; width: 150px">Aksi</th>
                            </tr>
                        </thead>
                        @php
                            $no=1;
                        @endphp
                        <tbody id="tabel">
                            @foreach($user as $p)
                            <tr style="position: center center">
                                <td style="text-align: center center">{{$no++}}</td>
                                <td>{{ $p->name }}</td>
                                <td>{{ $p->email }}</td>
                                @if ($p->isAdmin=='1')
                                @php
                                    $c ="Admin"
                                @endphp
                                @else
                                @php
                                    $c = "User"
                                @endphp
                                @endif
                                <td>{{ $c }}</td>
                                <td>{{ $p->created_at}}</td>
                                <td style="font-size: 20px">
                                    @if ($p->isAdmin=='1')
                                        <a href="{{ route('adminUsers.edit', $p->id) }}"><i class="btn btn-primary">Jadikan User</i></a>
                                    @else
                                        <a href="{{ route('adminUsers.edit', $p->id) }}"><i class="btn btn-secondary">Jadikan Admin</i></a>
                                    @endif
                                    <form action="{{ route('adminUsers.destroy', $p->id)}}" method="post" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" style="background-color: transparent; border: 0;" onclick="return confirm('Yakin hapus');"><i class="red trash alternate icon"></i></button>
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