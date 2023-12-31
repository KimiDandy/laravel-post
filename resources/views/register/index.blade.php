@extends('layouts.main')
@section('container')

<div class="row justify-content-center">
  <div class="col-lg-5">
    <main class="form-registration w-100 m-auto">
      <h1 class="h3 mb-3 fw-normal text-center">Registration</h1>
      <form action="/register" method="post">
        @csrf
        <div class="form-floating">
          <input type="text" name="name" class="form-control rounded-top @error('name')is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
          <label for="name">Name</label>
          <div class="invalid-feedback">
            @error('name')
                {{ $message }}
            @enderror
          </div>
        </div>
        <div class="form-floating">
          <input type="text" name="username" class="form-control @error('username')is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username') }}">
          <label for="username">Username</label>
          <div class="invalid-feedback">
            @error('username')
                {{ $message }}
            @enderror
          </div>
        </div>
        <div class="form-floating">
          <input type="email" name="email" class="form-control @error('email')is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
          <label for="email">Email address</label>
          <div class="invalid-feedback">
            @error('email')
                {{ $message }}
            @enderror
          </div>
        </div>
        <div class="form-floating">
          <input type="password" name="password" class="form-control rounded-bottom @error('password')is-invalid @enderror" id="password" placeholder="Password" required>
          <label for="password">Password</label>
          <div class="invalid-feedback">
            @error('password')
                {{ $message }}
            @enderror
          </div>
        </div>
        <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Register</button>
      </form>
      <small class="d-block text-center mt-3">Already Registered? <a href="/login">Log In!</a></small>
    </main>
  </div>
</div>

@endsection