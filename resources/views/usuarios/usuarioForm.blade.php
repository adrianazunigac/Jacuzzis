@extends('layouts.admin')

@section('content')

@if (isset($user))

@php

$arrData['url']= 'usuarios/'.$user->id;

$arrData['metodo']= 'PATCH';

$arrData['id']= $user->id;

$arrData['nombre']= $user->nombre;

$arrData['document']= $user->document;

$arrData['email']= $user->email;

$arrData['estado']= $user->state;

$arrData['ruta_img']= $user->ruta_img;

$arrData['accion']= 'Editar';

$arrData['titulo']= 'Edición Usuario';

@endphp

@else

@php

$arrData['url']= 'usuarios';

$arrData['metodo']= 'POST';

$arrData['id']= old('id');

$arrData['nombre']= old('nombre');

$arrData['document']= old('document');

$arrData['email']= old('email');

$arrData['estado']= old('estado');

$arrData['ruta_img']= old('ruta_img');

$arrData['accion']= 'Crear';

$arrData['titulo']= 'Registro Usuario';

@endphp

@endif

<section class="content-header">

    <div class="container-fluid">

        <div class="row mb-2">

            <div class="col-sm-6">

                <h1>{{$arrData['titulo']}}</h1>

            </div>

            <div class="col-sm-6">

                <ol class="breadcrumb float-sm-right">

                    <li class="breadcrumb-item"><a href="{{url('/home')}}">Inicio</a></li>

                    <li class="breadcrumb-item active">Usuario</li>

                </ol>

            </div>

        </div>

    </div>

</section>

<div class="card">

    <div class="card-content">

        <form method="POST" action="{{url($arrData['url'])}}" role="form" id="americanForm" enctype="multipart/form-data">

            @csrf @method($arrData['metodo'])

            <div class="card-body">



                <div class="row">

                    <div class="col-md-12">

                        <div class="row">

                            <div class="col-md-10 text-center">

                                <label for="imagen">

                                @if (!empty($arrData['ruta_img']))

                                    <img src="{{ asset('dist/img/usuarios/'.$arrData['ruta_img']) }}" id="imagenmuestra" class="profile-user-img img-fluid img-circle" title="Imagén Usuario">

                                @else

                                   <img src="{{ asset('dist/img/default_user_american.png') }}" id="imagenmuestra" class="profile-user-img img-fluid img-circle" title="Imagén Usuario">

                                @endif

                                </label>

                                <input type="file" class="form-control" name="imagen" id="imagen" maxlength="256" placeholder="Imagen">

                                <input type="hidden" class="form-control" name="imagenactual" id="imagenactual">

                            </div>

                        </div>

                    </div>

                </div>
                <users-component></users-component>
                <div class="row">

                    <div class="col-md-12">

                        <div class="row">

                        <div class="col-md-5">

                                <label for="nombre_usuario">Nombre</label>

                                <input type="text" id="nombre_usuario" name="nombre_usuario" class="form-control form-control-sm" value="{{$arrData['nombre']}}" />

                                <span id="nombre_usuario-error" class="error invalid-feedback" style="display:none"></span>

                            </div>

                            <div class="col-md-5">

                                <label for="documento_usuario">Documento</label>

                                @if (isset($document))

                                  <input type="text" name="documento_usuario" id="documento_usuario" class="form-control form-control-sm borralo"  value="{{$arrData['document']}}"/>

                                  <span id="documento_usuario-error" class="error invalid-feedback" style="display:none"></span>

                                @else

                                  <input type="text" name="documento_usuario" id="documento_usuario" class="form-control form-control-sm borralo" value="{{$arrData['document']}}" />

                                  <span id="documento_usuario-error" class="error invalid-feedback" style="display:none"></span>

                                @endif

                            </div>

                        </div>

                    </div>

                </div>



                <div class="row">

                    <div class="col-md-12">

                        <div class="row">
                        <div class="col-md-5">

                        <label for="contrasena_usuario">Contraseña</label>

                              @if (isset($user))

                                <input type="password" name="contrasena_usuario" id="contrasena_usuario" class="form-control form-control-sm borralo" placeholder="Si desea cambiar la clave digitela aquí." />

                                <span id="contrasena_usuario-error" class="error invalid-feedback" style="display:none"></span>

                              @else

                                <input type="password" name="contrasena_usuario" id="contrasena_usuario" class="form-control form-control-sm borralo" />

                                <span id="contrasena_usuario-error" class="error invalid-feedback" style="display:none"></span>

                              @endif
                            </div>

                        <div class="col-md-5">

                                <label for="email">Email</label>

                                <div class="input-group mb-3">

                                    <div class="input-group-prepend">

                                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>

                                    </div>

                                    <input name="email" id="email" type="email" class="form-control" placeholder="Email" value="{{$arrData['email']}}">

                                    <span id="email-error" class="error invalid-feedback" style="display:none"></span>

                                </div>

                            </div>


                        </div>

                    </div>

                </div>

            </div>

            </div>

            <div class="card-footer">

                <input type="hidden" id="id" name="id" value="{{$arrData['id']}}" />

                <input type="hidden" id="tipo" name="tipo" value="1" />

                <a href="{{url('/usuarios')}}" class="btn btn-secondary alignbuttons">Cancelar</a>

                <button type="submit" class="btn btn-secondary alignbuttons">{{$arrData['accion']}}</button>

            </div>

        </form>

    </div>

</div>

<script type="text/javascript">

$(document).ready(function() {

    @if(count($errors) > 0)

        toastr.error("Error al editar el usuario");

    @endif



  $('#americanForm').validate({

    rules: {

      nombre_usuario: {

        required: true

      },

      documento_usuario: {

      required: true

      },

      password: {

        required: true,

        minlength: 5

      },

      email: {

        required: true,

        email: true,

      }

    },

    messages: {

      nombre_usuario: {

        required: "El campo nombre es obligatorio",

        name: "El campo nombre es obligatorio."

      },

      password: {

        required: "El campo contraseña es obligatorio",

        minlength: "Su contraseña deberia tener al menos 5 caracteres"

      },

      email: {

        required: "El campo email es obligatorio",

        email: "Por favor ingrese un correo electronico valido"

      },
      documento_usuario: {

        required: "El campo documento es obligatorio",

        documento_usuario: "El campo documento es obligatorio."

      }

    },

    errorElement: 'span',

    errorPlacement: function (error, element) {

      error.addClass('invalid-feedback');

      element.closest('.form-group').append(error);

    },

    highlight: function (element, errorClass, validClass) {

      $(element).addClass('is-invalid');

    },

    unhighlight: function (element, errorClass, validClass) {

      $(element).removeClass('is-invalid');

    }

  });



function readURL(input) {

  if (input.files && input.files[0]) {

    var reader = new FileReader();

    reader.onload = function(e) {

      // Asignamos el atributo src a la tag de imagen

      $('#imagenmuestra').attr('src', e.target.result);

    }

    reader.readAsDataURL(input.files[0]);

  }

}



// El listener va asignado al input

$("#imagen").change(function() {

  readURL(this);

});



});

</script>

<style>

#imagen {

    display:none !important;

 }

 #imagenmuestra{

    cursor: pointer;

    width: 168px;

    height: 168px;

 }

 .profile-user-img{

  border: 3px solid #065C72 !important;

 }

</style>

@endsection