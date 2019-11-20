@extends('layouts.header')
@section('title', 'PlesirJogja.com')
<link rel="stylesheet" type="text/css" href="{{ url('/css/beranda.css') }}" />
@section('navbar')
    @parent
    <div class="headline">
        Cari, beli dan Atur Wisatamu di Jogja!
    </div>
@endsection
