@extends('layouts.app')

@section('content')
    <div class="container">
   <!-- Remove This Before You Start -->
   <h1>Tambah Jadwal</h1>
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
   <form action="{{ route('schedules.store') }}" method="post" enctype="multipart/form-data">
       {{ csrf_field() }}
       <div class="form-group">
            <div class="form-group">
                    <label for="facl">Tanggal:</label>
                    <input type="date" class="form-control" id="" name="date">
               </div>
            <label for="nama">Destinasi :</label>
            <input list="browsers" class="form-control"  name="nama">
            <datalist id="browsers">
                @foreach ($place as $item)
                    <option value="{{$item->nama}}" >
                @endforeach
           </datalist> 
        </div>

       <div class="form-group">
            <label for="day">Hari:</label>
            <input type="text" class="form-control" id="" name="day">
        </div>
       <div class="form-group">
            <label for="day">Dari Jam: </label>
            <input type="time" class="form-control" id="" name="hourStart">
        </div>
       <div class="form-group">
           <label for="open">Sampai Jam: </label>
           <input type="time" class="form-control" id="" name="hourEnd">
       </div>
       <div class="form-group">
           <button type="submit" class="btn btn-md btn-primary">Submit</button>
           <button type="reset" class="btn btn-md btn-danger">Cancel</button>
       </div>
   </form>

    </div>
@endsection







