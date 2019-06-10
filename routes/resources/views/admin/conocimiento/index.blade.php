@extends("layouts.app_admin")
@section("content")
	<div class="row" id="appControllerConocimiento">
		<div class="container">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<!--<input type="hidden" id="idCentro" value="{{Session::get('id_center')}}"  name="id_center">-->
				<a href="#newConocimiento" data-toggle="modal" class="btn btn-primary pull-right">Nuevo</a>
				<div class="clearfix"></div>
				<table class="table table-bordered" style="margin-top: 10px;">
					<tr>
						<th>Id</th>
						<th>Descripción</th>
						<th>Tipo conocimiento</th>
						<th colspan="3" class="text-center">Opciones</th>
					</tr>
					<tr v-for="conocimiento in conocimientos">
						<td>@{{conocimiento.id}}</td>
						<td>@{{conocimiento.descripcion}}</td>
						<td>@{{conocimiento.nombre_tipo}}</td>
						<td><a href="" v-on:click.prevent="editConocimiento(conocimiento)"><i class="glyphicon glyphicon-pencil" aria-hidden="true"></i></a></td>
                        <td><a href="" v-on:click.prevent="deleteconocimiento(conocimiento.id)"><i class="glyphicon glyphicon-trash" aria-hidden="true"></i></a></td>
					</tr>
				</table>
			</div>
		</div>
		@include("admin.conocimiento.create")
		@include("admin.conocimiento.edit")
	</div>
	<script type="text/javascript" src="{{asset('js/controller/ConocimientoController.js')}}"></script>
@endsection
