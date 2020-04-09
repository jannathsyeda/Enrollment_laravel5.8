@extends('layout')

@section('content')
<form method="POST" action="{{ route('posts.update',['post'=>$post->id]) }}">
    @csrf
    @method('PUT')
    <div class="form-group">
            @include('posts._form')
        <button type="submit" class="btn btn-primary">updated </button>
    </form>
@endsection