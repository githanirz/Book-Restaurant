@extends('layouts.main')
@section('title','Login')
@section('navLogin','active')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-4">
        <main class="form-signin w-100 m-auto">
            <br>
            <br>
            <div class="section-header">
                <h2>Welcome To Our Restaurant</h2>
                <p>Please <span>Sign in</span> !</p>
            </div>
            <br>
            
            <form method="post" action="/login">
                @csrf
                
                <br>
                <br>
                <div class="form-floating">
                    <input type="email" class="form-control @error('email') is-invalid
                    @enderror" value="{{ old('email') }}" name="email" id="email" required autofocus>
                    @error('email')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                    @enderror
                    <label for="floatingInput">Email address</label>
                    <br>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password" required>
                    <label for="floatingPassword">Password</label>
                </div>
                <br>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
                <br>
                <h6 class="mt-3 mb-1 text-muted text-center mb-5">Belum punya akun? <a href="/register">Register</a> </h6>
            </form>

         </main>
    </div><!-- End Reservation Form -->

</div>
@endsection