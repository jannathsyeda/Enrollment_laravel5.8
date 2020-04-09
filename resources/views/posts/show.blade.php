@extends('layout')

@section('content')

Name:{{$post->name }}
<p>added:  {{ $post->created_at->diffForHumans() }}</p>

@if ((new Carbon\Carbon())->diffInMinutes($post->created_at) < 5)
    <strong>New!</strong>
@endif


@endsection