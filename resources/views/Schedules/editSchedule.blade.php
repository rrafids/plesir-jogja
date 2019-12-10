@extends('layouts.app')

@section('content')
    <div class="container">
   <!-- Remove This Before You Start -->
   <h1>Edit Jadwal</h1>
   <hr>
   @if (count($errors) > 0)
   <div class="alert alert-danger">
       <ul>
           @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
           @endforeach
       </ul>
   </div>
   @endif
   <form action="{{ route('schedules.update' , $scdl->id) }}" method="post" enctype="multipart/form-data">
       {{ csrf_field() }}
       @method('PUT')
       <div class="form-group">
            <div class="form-group">
                    <label for="facl">Tanggal:</label>
                    <input type="date" class="form-control" id="" name="date" value="{{$scdl->date['date']}}">
               </div>
            <label for="nama">Destinasi :</label>
            <input list="browsers" class="form-control"  name="nama" value="{{$scdl->places['nama']}}">
            <datalist id="browsers">
                @foreach ($place as $item)
                    <option value="{{$item->nama}}" >
                @endforeach
           </datalist> 
        </div>

       <div class="form-group">
            <label for="day">Hari:</label>
       <input type="text" class="form-control" id="" name="day" value="{{$scdl->day}}">
        </div>
       <div class="form-group">
            <label for="day">Dari Jam: </label>
            <input type="time" class="form-control" id="" name="hourStart" value="{{$scdl->hourStart}}">
        </div>
       <div class="form-group">
           <label for="open">Sampai Jam: </label>
           <input type="time" class="form-control" id="" name="hourEnd" value="{{$scdl->hourEnd}}">
       </div>
       <div class="form-group">
           <button type="submit" class="btn btn-md btn-primary">Submit</button>
           <button type="reset" class="btn btn-md btn-danger">Cancel</button>
       </div>
   </form>

    </div>
@endsection







