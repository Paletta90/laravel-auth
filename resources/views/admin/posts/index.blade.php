@extends('layouts.app')

@section('content')
<table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">Title</th>
        <th scope="col">Content</th>
        <th scope="col">Image</th>
        <th scope="col">Firm</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($posts as $post) 
          <tr>

            <td>
                <p>{{ $post->title }}</p>
            </td>

            <td>
                <p>{{ $post->content }}</p>
            </td>

            <td>
                <img src="{{ $post->image }}" alt="" width="50px">
            </td>

            <td>
                <p class="font-italic">{{ $post->firm }}</p>
            </td>

            <td class="d-flex">
                <a href="{{ route('admin.posts.show', $post->id) }}" class="btn btn-primary mr-2">View</a>
                <a href="" class="btn btn-success mr-2">Edit</a>
                <a href="" class="btn btn-danger">Delete</a>
            </td>

          </tr>
      @empty
          <h2 class="text-center py-5">Non ci sono post da visualizzate</h2>
      @endforelse
    </tbody>
  </table>
@endsection