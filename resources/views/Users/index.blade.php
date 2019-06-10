@extends("layouts.app_admin")
@section("content")

<div class="container">
    <div class="row text-center">
        <h3>Usuarios</h3>
    </div>  
<a href="#crearUser" data-toggle="modal" class="btn btn-primary pull-right">Nuevo</a>
@include("Users.create")
<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
<div class="container-fluid">
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            
            <th>Tipo Documento</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Documento</th>
            <th>Estado</th>
            <th>Telefono</th>
            <th>Email</th>
            <th>Tipo Usuario</th>
            <th>Ficha</th>
            <th colspan="2">Opciones</th>
        </tr>
    </thead>
    <tbody>

    @foreach($users as $usuario)
        <tr>
            <!--  --> 
            <td>{{ $usuario->nombre }}</td>
            <td>{{ $usuario->name }}</td>
            <td>{{ $usuario->apellido }}</td>
            <td>{{ $usuario->documento }}</td>
            <td>{{ $usuario->estado }}</td>
            <td>{{ $usuario->telefono }}</td>
            <td>{{ $usuario->email }}</td>
            <td>{{ $usuario->tipousuarios }}</td>
            <td></td>
            <td>
              <a class="btn btn-small btn-info" id="edituser" data-id="{{ $usuario->id }}" data-tipo="{{ $usuario->tipodocumento }}" data-nombre="{{ $usuario->name }}" data-apellido="{{ $usuario->apellido }}" data-documento="{{ $usuario->documento }}" data-password="{{ $usuario->password }}" data-estado="{{ $usuario->estado }}" data-telefono="{{ $usuario->telefono }}" data-email="{{ $usuario->email }}" data-rol="{{ $usuario->tipousuarios }}" data-toggle="modal" data-target="#editarUser" href="#">Editar</a> 
            </td>
            <td>
              <a class="btn btn-small btn-danger" href="{{ url('administrador/users/delete',
              $usuario->id) }}">Eliminar</a>   
            </td>            
        </tr>


    @endforeach
    </tbody>
</table>
@include("Users.update")
</div>
</div>
</div>
@endsection