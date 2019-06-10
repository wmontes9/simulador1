@extends("layouts.app_admin")
@section("content")
	<div class="row" id="appControllerFicha">
		<div class="container">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<!--<input type="hidden" id="idCentro" value="{{Session::get('id_center')}}"  name="id_center">-->
				<a href="#newFicha" data-toggle="modal" class="btn btn-primary pull-right">Nuevo</a>
				<div class="clearfix"></div>
				<table class="table table-bordered" style="margin-top: 10px;">
					<tr>
						<th>Id</th>
                        <th>Id_Programa</th>
                        <th>Codigo</th>
                        <th>Fecha inicio</th>
                        <th>Fecha fin</th>
						<th colspan="3">Opciones</th>
					</tr>
					<tr v-for="ficha in fichas">
						<td>@{{ficha.id}}</td>
                        <td>@{{ficha.id_programa}}</td>
                        <td>@{{ficha.codigo}}</td>
                        <td>@{{ficha.fecha_inicio}}</td>
                        <td>@{{ficha.fecha_fin}}</td>
						<td><a href="" v-on:click.prevent="editficha(ficha)"><i class="glyphicon glyphicon-pencil" aria-hidden="true"></i></a></td>
						<td><a href="" v-on:click.prevent="deleteficha(ficha.id)"><i class="glyphicon glyphicon-trash" aria-hidden="true"></i></a></td>
					</tr>
				</table>
			</div>
		</div>
		@include("admin.ficha.create")
		@include("admin.ficha.edit")
	</div>
	<script type="text/javascript" src="{{asset('js/controller/FichaController.js')}}"></script>
@endsection
