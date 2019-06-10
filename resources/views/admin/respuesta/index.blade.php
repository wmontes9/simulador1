@extends("layouts.app_admin")

@section("content")
<div class="row" id="appControllerRespuesta">
    <div class="container">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <a href="#newRespuesta" data-toggle="modal" class="btn btn-primary pull-right">Nuevo</a>
            <div class="clearfix"></div>
            <table class="table table-bordered" style="margin-top: 10px;">
                <tr>
                    <th>Id</th>
                    <th>Descripción</th>
                    <th>Validación</th>
                    <th colspan="6" class="">Opciones</th>
                </tr>
                <tr v-for="respuesta in respuestas">
                    <td>@{{respuesta.id}}</td>
                    <td>@{{respuesta.descripcion}}</td>
                    <td>@{{respuesta.validacion}}</td>
                    <td><a href="" v-on:click.prevent="editrespuesta(respuesta)"><i class="glyphicon glyphicon-pencil" aria-hidden="true"></i></a></td>
                    <td><a href="" v-on:click.prevent="deleterespuesta(respuesta.id)"><i class="glyphicon glyphicon-trash" aria-hidden="true"></i></a></td>
                </tr>
            </table>
        </div>
    
    </div>
    @include("admin.respuesta.create")
    @include("admin.respuesta.edit")
</div>
<script type="text/javascript" src="{{asset('js/controller/respuestaController.js')}}"></script>
@endsection