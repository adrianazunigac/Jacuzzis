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
                @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="input-group mb-3">
                        <img  class="logoempresa" src="{{ asset('dist/img/empresa/logo_empresa.jpg') }}" width="300">
                        </div>
                        <div class="input-group mb-3">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    <div class="input-group-append">
                        <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                    </div>
                    <div class="row">
                    <!-- /.col -->
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block botoninicio">Recuperar Contraseña</button>
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
<style>
.logoempresa{
    height: 174px !important;
}
.botoninicio{
    background:#065C72 !important;
}
</style>
@endsection
