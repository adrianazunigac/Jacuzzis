

@extends('layouts.admin')



@section('content')

<section class="content-header">

    <div class="container-fluid">

        <div class="row mb-2">

            <div class="col-sm-6">

                <h1>Usuarios</h1>

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

    <div class="card-header">

        <div class="col-sm-12">

            <a href="{{url('usuarios/create')}}" type="button" class="btn btn-secondary alignbuttons">Crear Usuario</a>

        </div>

    </div>

    <div class="card-body">

        <table id="example1" class="table table-bordered table-striped datamerican">

            <thead>

                <tr>

                    <th>#</th>

                    <th>Nombre</th>

                    <th>Documento</th>

                    <th>Email</th>

                    <th>Acciones</th>

                </tr>

            </thead>

            <tbody>

                @foreach ($Users as $data)

                <tr>

                    <td>{{$data->id}}</td>

                    <td>{{$data->name}}</td>

                    <td>{{$data->document}}</td>

                    <td>{{$data->email}}</td>


                    <td>

                        <a href="{{url('usuarios/'.$data->id.'/edit')}}" class="btn btn-primary btn-xs"><i class="nav-icon fas fa-edit" title="Editar Usuario"></i></a>

                    </td>

                </tr>

                @endforeach

            </tbody>

            <tfoot>

            </tfoot>

        </table>

    </div>

</div>





<script type="text/javascript">

$(document).ready(function() {

    @if(session('message'))

        toastr.success("{{ session('message') }}");

    @endif

});

</script>

@endsection