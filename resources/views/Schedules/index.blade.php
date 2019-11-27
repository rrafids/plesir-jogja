@extends('layouts.app')
@section('content')

<div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Obyek Wisata</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Mulai</th>
                <th scope="col">Selesai</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($schedules as $schedule)
            <tr>
                <th scope="row">1</th>
                <td></td>
                <td>{{ $schedule->date }}</td>
                <td>{{ $schedule->time_start }}</td>
                <td>{{ $schedule->time_end }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection