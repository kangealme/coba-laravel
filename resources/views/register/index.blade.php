@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <main class="form-registration">
                <h1 class="h3 mb-3 fw-normal text-center">Form Registrasi</h1>
                <form>
                    <div class="form-floating">
                        <input type="text" class="form-control rounded-top" id="name" name="name">
                        <label for="name">Nama</label>
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="username" name="username">
                        <label for="username">Username</label>
                    </div>
                    <div class="form-floating">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control rounded-bottom   " id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>


                    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
                </form>
                <small class="d-block text-center mt-3">Sudah Terdaftar ? <a href="/login">Log in</a></small>
            </main>
        </div>
    </div>
@endsection
