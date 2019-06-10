@extends("layouts.app_admin")

@section("content")
<div class="row" id="appControllerCuestionario">
    <div class="container">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <a href="#newCuestionario" data-toggle="modal" class="btn btn-primary pull-right">Nuevo</a>
            <div class="clearfix"></div>
            <table class="table table-bordered" style="margin-top: 10px;">
                <tr>
                    <th>Id</th>
                    <th>Titulo</th>
                    <th>Descripción</th>
                    <th>Fecha</th>
                    <th>Estado</th>
                    <th>Duración</th>
                    <th colspan="6" class="">Opciones</th>
                </tr>
                <tr v-for="cuestionario in cuestionarios">
                    <td>@{{cuestionario.id}}</td>
                    <td>@{{cuestionario.titulo}}</td>
                    <td>@{{cuestionario.descripcion}}</td>
                    <td>@{{cuestionario.fecha_cuestionario}}</td>
                    <td>@{{cuestionario.estado}}</td>
                    <td>@{{cuestionario.duracion}}</td>
                    <td><a href="" v-on:click.prevent="getPreguntas(cuestionario.id)">Preguntas</a></td>
                    <td><a href="" v-on:click.prevent="editCuestionario(cuestionario)"><i class="glyphicon glyphicon-pencil" aria-hidden="true"></i></a></td>
                    <td><a href="" v-on:click.prevent="deleteCuestionario(cuestionario.id)"><i class="glyphicon glyphicon-trash" aria-hidden="true"></i></a></td>
                </tr>
            </table>
        </div>
    
    </div>
    @include("admin.cuestionario.create")
    @include("admin.cuestionario.edit")
</div>
<script type="text/javascript" src="{{asset('js/controller/CuestionarioController.js')}}"></script>
@endsection
