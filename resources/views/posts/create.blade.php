@extends('layout')

@section('content')
<form method="POST" action="{{ route('posts.store') }}">
    @csrf
    <div class="form-group">
            @include('posts._form')
        <button type="submit" class="btn btn-primary">add </button>
    </form>
@endsection