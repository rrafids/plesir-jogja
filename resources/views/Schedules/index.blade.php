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
                    @if($schedules)
                    @foreach ($schedules as $p)
                    <table class="table table-bordered table-hover table-striped" style="font-size: 15px; text-align: center" align="center">
                            <thead>
                                <tr>
                                    <th colspan="2" class="w-50">{{date('d-m-Y', strtotime($p->date))}}</th>
                                    <th colspan="2" class="w-35" id="demo"></th>
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
                            @foreach($p->schedule  as $q)
                            <tr style="position: center center">
                                    
                                {{-- <td>{{ Carbon\Carbon::parse($p->date['date'])->format('d-m-Y') }}</td> --}}
                                <td>{{ $q->places['nama'] }}</td>
                                <td>{{ $q->day}}</td>
                                <td>{{ $q->hourStart }}</td>
                                <td>{{ $q->hourEnd}}</td>
                                <td style="font-size: 20px">
                                    <a href="{{ route('schedules.edit', $q->id) }}"><i class="blue edit icon"></i></a> |
                                    <form action="{{ route('schedules.destroy', $q->id)}}" method="post" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" style="background-color: transparent; border: 0;" onclick="return confirm('Yakin hapus');"><i class="red trash alternate icon"></i></button>
                                        </form>   
                                </td>
                            </tr>
                            @endforeach
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
{{-- <script>
        // Set the date we're counting down to
        var countDownDate = new Date('{{$p->date}}').getTime();
        
        // Update the count down every 1 second
        var x = setInterval(function() {
        
          // Get today's date and time
          var now = new Date().getTime();
            
          // Find the distance between now and the count down date
          var distance = countDownDate - now;
            
          // Time calculations for days, hours, minutes and seconds
          var days = Math.floor(distance / (1000 * 60 * 60 * 24));
          var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
          var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
          var seconds = Math.floor((distance % (1000 * 60)) / 1000);
            
          // Output the result in an element with id="demo"
          document.getElementById("demo").innerHTML = days + "d " + hours + "h "
          + minutes + "m " + seconds + "s ";
            
          // If the count down is over, write some text 
          if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
          }
        }, 1000);

        </script> --}}
        
@endsection