@extends("layouts.app_admin")
@section("content")
	<div class="row" id="appControllerResult">
		<div class="container">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<!--<input type="hidden" id="idCentro" value="{{Session::get('id_center')}}"  name="id_center">-->
				<a href="#newResultado" data-toggle="modal" class="btn btn-primary pull-right">Nuevo</a>
				<div class="clearfix"></div>
				<table class="table table-bordered" style="margin-top: 10px;">
					<tr>
						<td>Id</td>
                        <td>Id_Competencia</td>
						<td>Codigo</td>
						<td>Descripcion</td>
						<td colspan="3">Opciones</td>
					</tr>
					<tr v-for="resultado in resultados">
						<td>@{{resultado.id}}</td>
                        <td>@{{resultado.id_competencia}}</td>
						<td>@{{resultado.codigo}}</td>
						<td>@{{resultado.descripcion}}</td>
						<td><a href="" v-on:click.prevent="editResult(resultado)"><i class="glyphicon glyphicon-pencil" aria-hidden="true"></i></a></td>
						<td><a href="" v-on:click.prevent="deleteResult(resultado.id)"><i class="glyphicon glyphicon-trash" aria-hidden="true"></i></a></td>
					</tr>
				</table>
			</div>
		</div>
		@include("admin.resultado.create")
		@include("admin.resultado.edit")
	</div>
	<script type="text/javascript" src="{{asset('js/controller/ResultadoController.js')}}"></script>
@endsection
