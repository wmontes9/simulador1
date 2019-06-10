@extends("layouts.app_admin")
@section("content")
<div class="row" id="appControllerPregunta">
    <div class="container">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <a href="#newPregunta" data-toggle="modal" class="btn btn-primary pull-right">Nuevo</a>
            <div class="clearfix"></div>
            <table class="table table-bordered" style="margin-top: 10px;">
                <tr>
                    <th>Id</th>
                    <th>Descripción</th>
                    <th colspan="3" class="">Opciones</th>
                </tr>
                <tr v-for="pregunta in preguntas">
                    <td>@{{pregunta.id}}</td>
                    <td>@{{pregunta.descripcion}}</td>
                    <td><a href="" v-on:click.prevent="getRespuestas(pregunta.id)">Respuesta</a></td>
                    <td><a href="" v-on:click.prevent="editpregunta(pregunta)"><i class="glyphicon glyphicon-pencil" aria-hidden="true"></i></a></td>
                    <td><a href="" v-on:click.prevent="deletepregunta(pregunta.id)"><i class="glyphicon glyphicon-trash" aria-hidden="true"></i></a></td>
                </tr>
            </table>
        </div>
    
    </div>
    @include("admin.pregunta.create")
    @include("admin.pregunta.edit")
</div>
<script type="text/javascript" src="{{asset('js/controller/PreguntaController.js')}}"></script>
@endsection