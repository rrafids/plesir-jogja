@extends('layouts.appAdmin')
@section('content')
<div class="container mt-4">
    <div class="container">
        <h4 style="color:#245B43">Welcome, <strong>Admin</strong>  </h4>
    </div>
    <br>
    <section class="jumbotron text-center" style="background-color: white">
        <div class="container">
          <h1>Manajemen Plesir Jogja</h1>
          <img src="/images/admin2.png" alt="..." style="width: 350px; height: 350px">
          <p>
              <a href="{{route('adminPlaces.index')}}" class="btn btn-primary btn-lg my-2 mx-2">Obyek Wisata</a>
              <a href="{{route('adminUsers.index')}}" class="btn btn-secondary btn-lg my-2 mx-2">Pengguna</a>
            </p>
        </div>
      </section>
</div>
    
@endsection