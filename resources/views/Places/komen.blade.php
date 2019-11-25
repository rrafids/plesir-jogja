@extends('layouts.app')

@section('content')

@foreach($comments as $comment)

<h1>{{$comment->content}}</h1>


@endforeach

@endsection