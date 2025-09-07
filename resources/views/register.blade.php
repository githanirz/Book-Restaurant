@extends('layouts.main')
@section('title','Register')
@section('navLogin','active')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-4">
        <main class="form-signin w-100 m-auto">
            <br>
            <br>
            <div class="section-header">
                <h2>Welcome To Our Restaurant</h2>
                <p>Please <span>Register</span> !</p>
            </div>
            <br>
            <form method="post" action="/register">
                @csrf
                <h1 class="h3 mb-3 fw-normal text-center">Please Register</h1>
                <br>
                <div class="form-floating">
                    <input type="name" class="form-control" name="name" id="name" required autofocus>
                    <label for="floatingInput">Nama</label>
                </div>
                <br>
                <div class="form-floating">
                    <input type="email" class="form-control" name="email" id="email" required autofocus>
                    <label for="floatingInput">Email address</label>
                </div>
                <br>
                <div class="form-floating mt-2">
                    <input type="password" class="form-control" name="password" id="password1" placeholder="Password" required>
                    <label for="password1">Password</label>
                </div>
                <div class="form-check mt-2 float-end">
                    <input class="form-check-input" type="checkbox" id="showPasswordCheckbox1">
                    <label class="form-check-label" for="showPasswordCheckbox1">
                        Show Password
                    </label>
                </div>

                <div class="form-floating mt-5">
                    <input type="password" class="form-control" name="password" id="password2" placeholder="Password" required>
                    <label for="password1">Password</label>
                </div>
                <div class="form-check mt-2 float-end">
                    <input class="form-check-input" type="checkbox" id="showPasswordCheckbox2">
                    <label class="form-check-label" for="showPasswordCheckbox2">
                        Show Password
                    </label>
                </div>

                <button class="w-100 btn btn-lg btn-primary mt-5 mb-5" type="submit">Submit</button>
            </form>
        </main>
    </div>
</div>
<script>
    var showPasswordCheckbox1 = document.getElementById('showPasswordCheckbox1');
    var passwordInput1 = document.getElementById('password1');

    showPasswordCheckbox1.addEventListener('change', function() {
        if (showPasswordCheckbox1.checked) {
            passwordInput1.type = 'text';
        } else {
            passwordInput1.type = 'password';
        }
    });

    var showPasswordCheckbox2 = document.getElementById('showPasswordCheckbox2');
    var passwordInput2 = document.getElementById('password2');

    showPasswordCheckbox2.addEventListener('change', function() {
        if (showPasswordCheckbox2.checked) {
            passwordInput2.type = 'text';
        } else {
            passwordInput2.type = 'password';
        }
    });
</script>
@endsection
