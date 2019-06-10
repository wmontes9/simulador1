@extends("layouts.app_admin")

@section("content")
<div class="row text-center">
    <h3>Casos</h3>
</div>
<div class="row" id="appControllerCaso">
    <div class="container">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <a href="#newCaso" data-toggle="modal" class="btn btn-primary pull-right">Nuevo</a>
            <div class="clearfix"></div>
            <table class="table table-bordered" style="margin-top: 10px;">
                <tr>
                    <th>Id</th>
                    <th>Titulo</th>
                    <th style="width: 200px;">Imagen</th>
                    <th colspan="5" class="">Opciones</th>
                </tr>
                <tr v-for="caso in casos">
                    <td>@{{caso.id}}</td>
                    <td>@{{caso.titulo}}</td>
                    <td ><img :src="'{{url('/imgcaso')}}/'+caso.url_imagen" class="img-responsive"></td>
                    <td><a href="" v-on:click.prevent="editCaso(caso)"><i class="glyphicon glyphicon-pencil" aria-hidden="true"></i></a></td>
                    <td><a href="" v-on:click.prevent="deleteCaso(caso.id)"><i class="glyphicon glyphicon-trash" aria-hidden="true"></i></a></td>
                    <td><a href="" v-on:click.prevent="getDetalles(caso.id)">Detalle caso</a></td>
                    <td><a href="" v-on:click.prevent="getObjetivos(caso.id)">Objetivos</a></td>
                    <td><a href="" v-on:click.prevent="getPrograma(caso.id)">Programa</a></td>
                </tr>
            </table>
        </div>
    
    </div>
    @include("admin.caso.create")
    @include("admin.caso.edit")
</div>
<script type="text/javascript" src="{{asset('js/controller/CasoController.js')}}"></script>
@endsection