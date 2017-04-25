@extends('layouts.master')

@section('content')
  <div class="col-sm-8 container">

    <h3 class="list-group-item list-group-item-success">Publish a rutine</h3>
    <hr />
    <form method="POST" action="/posts" enctype="multipart/form-data">
      {{ csrf_field() }}

      <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" class="form-control" id="title" name="title">
      </div>

      <div class="form-group">
        <label for="body">Body:</label>
        <textarea name="body" id="body" class="form-control"></textarea>
      </div>

      <div class="form-group">
        <label for="image">Post image:</label>
        <input type="file" name="photo" class="form-control">
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-primary">Publish</button>
      </div>

      @include('layouts.errors')

    </form>

  </div>
@endsection
