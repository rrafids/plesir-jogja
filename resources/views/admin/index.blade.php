@extends('layouts.appAdmin')
@section('content')
<div class="container mt-4">
    <div class="container">
        <h4 style="color:#245B43">Welcome, <strong>Admin</strong>  </h4>
    </div>
    <br>
    <section class="jumbotron text-center">
        <div class="container">
          <h1>Manajemen Plesir Jogja</h1>
          <p>
            <a href="{{route('adminPlaces.index')}}" class="btn btn-primary my-2">Places</a>
            <a href="{{route('adminUsers.index')}}" class="btn btn-secondary my-2">Users</a>
          </p>
        </div>
      </section>
</div>
    
@endsection