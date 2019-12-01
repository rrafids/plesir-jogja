@extends('layouts.appAdmin')

@section('content')
    <div class="container">
   <!-- Remove This Before You Start -->
   <h1>Tambah Destinasi Wisata</h1>
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
   <form action="{{ route('admin.store') }}" method="post" enctype="multipart/form-data">
       {{ csrf_field() }}
       <div class="form-group">
           <label for="name">Nama Destinasi:</label>
           <input type="text" class="form-control" id="" name="name">
       </div>
       <div class="form-group">
            <label for="day">Hari Buka: </label>
            <input type="text" class="form-control" id="" name="day" placeholder="contoh : senin-rabu & jumat-minggu">
        </div>
       <div class="form-group">
           <label for="open">Jam Buka: </label>
           <input type="time" class="form-control" id="" name="open">
       </div>
       <div class="form-group">
           <label for="close">Jam Tutup: </label>
           <input type="time" class="form-control" id="" name="close">
       </div>
       <div class="form-group">
           <label for="price">Harga Tiket:</label>
           <input type="text" class="form-control" id="" name="price">
       </div>
       <div class="form-group">
            <label for="facl">Fasilitas:</label>
            <input type="text" class="form-control" id="" name="facl">
        </div>
       <div class="form-group">
            <label for="desc">Deskripsi:</label>
            <textarea class="form-control" id="alamat" name="desc"></textarea>
        </div>
        <div class="form-group">
            <label for="gambar">Masukkan File Gambar</label>
            <input type="file" name="gambar">
        </div>
       <div class="form-group">
           <button type="submit" class="btn btn-md btn-primary">Submit</button>
           <button type="reset" class="btn btn-md btn-danger">Cancel</button>
       </div>
   </form>

    </div>
@endsection







