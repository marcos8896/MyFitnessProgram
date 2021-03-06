@extends('layouts.master')

@section('content')
  <div class="col-sm-8 container">
    <h3 class="list-group-item list-group-item-success">Register</h3>
    <hr>
    <form class="POST" action="/register" method="POST">
      {{csrf_field()}}


      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="name" required value="{{ old('name') }}">
      </div>

      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="example@gmail.com" required value="{{ old('email') }}">
      </div>

      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" id="password" name="password" required>
      </div>

      <div class="form-group">
        <label for="password_confirmation">Password Confirmation:</label>
        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-primary">Register</button>
      </div>

    </form>

    @include('layouts.errors')


  </div>
@endsection
