@extends('login.navbar.navbar')

@section('login')
<div class="hero min-h-screen bg-base-200">
    <div class="hero-content flex-col lg:flex-row-reverse">
      <div class="text-center pl-4 lg:text-left">
        @if(session()->has('success'))
        <div role="alert" class="alert alert-success mb-5">
            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
            <span>{{ session('success') }}</span>
        </div>
        @endif
        @if(session()->has('loginError'))
        <div role="alert" class="alert alert-error mb-5">
            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
            <span>{{ session('loginError') }}</span>
          </div>
        @endif
        <h1 class="text-4xl font-bold">Introducing you Moneygement!</h1>
        <p class="py-6">Make your money management easier with Moneygement</p>
      </div>
      <div class="card shrink-0 w-full max-w-sm shadow-2xl bg-base-100">
        <form class="card-body" action="/" method="POST">
            @csrf
          <div class="form-control">
            <p class="text-xl font-bold text-center mb-3">Login Now!</p>
            <label class="label" for="email">
              <span class="label-text">Your Email</span>
            </label>
            <input type="email" name="email" placeholder="pentol@example.com" class="input input-bordered" id="email" required value="{{ old('email') }}"/>
            @error('email')
            <p class="text-red-500">{{ $message }}</p>
            @enderror
          </div>
          <div class="form-control">
            <label class="label" for="password">
              <span class="label-text">Password</span>
            </label>
            <input type="password" name="password" placeholder="password" class="input input-bordered" id="password" required />
            @error('password')
            <p class="text-red-500">{{ $message }}</p>
            @enderror
            <label class="label">
            <small>Not registered yet? <a class="link link-primary" href="/register">Register now</a></small>
            </label>
          </div>
          <div class="form-control mt-4">
            <button class="btn btn-outline btn-primary">
                Login
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15M12 9l3 3m0 0-3 3m3-3H2.25" />
                </svg>
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection

