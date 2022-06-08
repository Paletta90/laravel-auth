@extends('layouts.app')

@section('content')
<form class="w-25 m-auto" action="{{ route('admin.posts.store') }}" method="POST">

    @csrf

    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="Title">
    </div>

    <div class="form-group">
      <label for="content">Content</label>
      <textarea class="form-control" id="content" name="content" placeholder="Content" cols="50" rows="5"></textarea>
    </div>

    <div class="form-group">
      <label for="image">Image</label>
      <input type="text" class="form-control" id="image" name="image" placeholder="Url image">
    </div>

    <div class="form-group">
      <label for="firm">Firm</label>
      <input type="text" class="form-control" id="firm" name="firm" placeholder="Firm">
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-primary">Create</button>
    </div>

</form>
@endsection