@extends('template.main')

@section('content')
<div class="row my-4 justify-content-center">
  <div class="col-4">
<main class="form-signin w-100 m-auto">
    <h1 class="h3 mb-3 fw-normal text-center">Register</h1>
  <form action="{{ url('/register') }}" method="post">
    @csrf
    <div class="form-floating">
      <input type="name" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="name" autofocus required value='{{ old('name') }}'>
      <label for="name">Name</label>
      @error('name')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>
    <div class="form-floating">
      <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="name@example.com" autofocus required value='{{ old('email') }}'>
      <label for="email">Email address</label>
      @error('email')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" name='password' id="password" placeholder="Password">
      <label for="password">Password</label>
    </div>
    
    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
    <small>Already have an account?</small> <a href="{{ url('login') }}">Login</a></small>
    <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p>
  </form>
</main>
  </div>
</div>
@endsection