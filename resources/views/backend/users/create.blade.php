@extends('backend.layouts.main')


@section('content')
<div class="pagetitle">
    <h1>Insert user</h1>
  </div><!-- End Page Title -->
  <style>
    .border-tebal {
        border: 1px solid black;
    }
  </style>
    <br>
  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body col-lg-6 mb-5">
            <form method="post" action="/user-backend">
                @csrf
                <div class="mb-2">
                  <label for="name" class="form-label">name Lengkap</label>
                  <input type="text" class="form-control @error('name') is-invalid @enderror border-tebal" name="name" value="{{ old('name')}}">
                  @error('name')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="mb-2">
                  <label for="email" class="form-label">Email</label>
                  <input type="text" class="form-control @error('email') is-invalid @enderror border-tebal" name="email" value="{{ old('email')}}">
                  @error('email')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="mb-2">
                  <label for="email" class="form-label">Email Verified</label>
                  <input type="text" class="form-control @error('email_verified_at') is-invalid @enderror border-tebal" name="email_verified_at" value="{{ old('email_verified_at')}}">
                  @error('email_verified_at')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="mb-2">
                  <input type="hidden" name="email_verified_at" value="{{ now() }}">
                </div>
                <div class="mb-2">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control @error('password') is-invalid @enderror border-tebal" name="password" value="{{ old('password')}}">
                  @error('password')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="mb-2">
                  <label for="token" class="form-label">Token</label>
                  <input type="text" class="form-control @error('remember_token') is-invalid @enderror border-tebal" name="remember_token" value="{{ old('remember_token')}}">
                  @error('remember_token')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                  @enderror
                </div>
            
                <div class="mb-2">
                  <input type="hidden" name="remember_token" value="{{ old('remember_token') ?? Str::random(10) }}">
                </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
              </form>
          </div>
        </div>

      </div>
    </div>
  </section>
  @endsection