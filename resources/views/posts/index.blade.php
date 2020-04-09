@extends('layout')

@section('content')

<table class="table table-sm">
    <thead>
      <tr>
            <th scope="col">Name</th>
            <th scope="col">Contact</th>
            <th scope="col">CGPA</th>
            <th scope="col" style="margin-left:100px;">Action</th>

      </tr>
    </thead>

    <tbody>
        @forelse ($posts as $post)
    
      <tr>
      
        <td>{{ $post->name  }}</td>
        <td>{{ $post->contact }}</td>
        <td>{{ $post->cgpa }}</td>
       <td> <button class="btn btn-active">  <a href="{{ route('posts.edit',['post'=>$post->id]) }}">Edit</a></button></td>
       <td> <form action="{{ route('posts.destroy', ['post' => $post->id]) }}" 
        onsubmit="return confirm('Are you sure?')" method="POST">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger" type="submit">Delete</button>
    </form></td>
       <td> <button >  <a href="{{ route('posts.show',['post'=>$post->id]) }}">Date</a></button></td>


   
      </tr>
      @empty
      no data!
  @endforelse
  
      
    </tbody>
  </table>


    
@endsection