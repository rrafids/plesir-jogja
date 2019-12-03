@extends('layouts.appAdmin')
@section('content')
<div class="container mt-4">
    <div class="container">
        <h4 style="color:#245B43">Welcome, <strong>Admin</strong>  </h4>
    </div>
    <section class="jumbotron text-center">
        <div class="container">
          <h1>Dashboard Admin</h1>
          <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
          <p>
            <a href="{{route('adminPlaces.index')}}" class="btn btn-primary my-2">Places</a>
            <a href="{{route('adminUsers.index')}}" class="btn btn-secondary my-2">Users</a>
          </p>
        </div>
      </section>
</div>
    
@endsection