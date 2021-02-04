@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="login-box">
            <div class="login-logo">
            </div>
            <br>
            <br>
            <!-- /.login-logo -->
            <div class="card">
                <div class="card-body login-card-body">
                <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="input-group mb-3">
                        <img  class="logoempresa"  src="{{ asset('dist/img/empresa/logo_empresa.jpg') }}">
                        </div>
                        <div class="input-group mb-3">
                        <input id="document" type="text" class="form-control @error('document') is-invalid @enderror" name="document" value="{{ old('document') }}" required autocomplete="document" autofocus placeholder="Documento identificación">
                        @error('document')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    <div class="input-group-append">
                        <div class="input-group-text">
                        <span class="fas fa-credit-card"></span>
                        </div>
                    </div>
                    </div>
                    <div class="input-group mb-3">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Contraseña">
                    @error('password')
                            <strong>{{ $message }}</strong>
                    @enderror
                    <div class="input-group-append">
                        <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                        </div>
                    </div>
                    </div>
                    <div class="row">
                    <!-- /.col -->
                    <div class="col-12">
                        <button type="submit" class="btn btn-block bg-gradient-secondary">Iniciar Sesión</button>
                    </div>
                    <!-- /.col -->
                    </div>
                </form>
                </div>
                <!-- /.login-card-body -->
            </div>
            </div>
    </div>
</div>
@endsection
