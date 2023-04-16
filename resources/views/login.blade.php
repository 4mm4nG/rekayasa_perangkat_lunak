@extends('layouts.app')
@section('title')
Login
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4 bg-card position-absolute top-50 start-50 translate-middle">
            <div class="card shadow">
                <form action="{{ route('login.store') }}" method="post" class="form-control p-4">
                    @csrf
                    <label for="">username</label>
                    <input type="text" name="username" value="{{ old('username') }}" autofocus
                        class="form-control @error('username') is-invalid @enderror mt-2" id="" required>
                    @error('username')
                    <div id="username" class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                    <label for="" class="mt-2">password</label>
                    <input type="password" name="password"
                        class="form-control mt-2 @error('password') is-invalid @enderror" id="" required>
                    @error('password')
                    <div id="password" class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                    <button class="btn btn-primary btn-sm mt-4 mb-2">Login</button><br>
                    <a class="" href="">Forgot password</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection