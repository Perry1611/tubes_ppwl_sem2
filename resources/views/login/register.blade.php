@extends('login.navbar.navbar')

@section('login')
<div class="hero min-h-screen bg-base-200">
    <div class="hero-content flex-col lg:flex-row-reverse">
      <div class="text-center pl-4 lg:text-left">
        <h1 class="text-4xl font-bold">Register Now!</h1>
        <p class="py-6">Make your money management easier with Moneygement</p>
      </div>
      <div class="card shrink-0 w-full max-w-sm shadow-2xl bg-base-100">
        <form class="card-body" action="/register" method="POST">
            @csrf
          <div class="form-control">
            <p class="text-xl font-bold text-center mb-3">Register Now!</p>
            <label class="label" for="email">
              <span class="label-text">Email</span>
            </label>
            <input type="email" name="email" placeholder="Email" class="input input-bordered" id="email" required value="{{ old('email') }}"/>
            @error('email')
            <p class="text-red-500">{{ $message }}</p>
            @enderror
            <label class="label" for="name">
              <span class="label-text">Name</span>
            </label>
            <input type="text" name="name" placeholder="Your name" class="input input-bordered" id="name" required value="{{ old('name') }}"/>
            @error('name')
            <p class="text-red-500">{{ $message }}</p>
            @enderror
            <label class="label" for="username">
              <span class="label-text">Username</span>
            </label>
            <input type="text" name="username" placeholder="Username" class="input input-bordered" id="username" required value="{{ old('username') }}"/>
            @error('username')
            <p class="text-red-500">{{ $message }}</p>
            @enderror
          </div>
          <div class="form-control">
            <label class="label" for="password">
              <span class="label-text">Password</span>
            </label>
            <input type="password" name="password" placeholder="Password" class="input input-bordered" id="password" required />
            @error('password')
            <p class="text-red-500">{{ $message }}</p>
            @enderror
            <label class="label">
            <small>Already registered? <a class="link link-primary" href="/">Login here</a></small>
            </label>
          </div>
          <div class="form-control mt-4">
            <button class="btn btn-outline btn-primary">Register Now!</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
