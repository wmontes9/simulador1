@extends("layouts.app_admin")
@section("content")
	<div class="row" id="appControllerObjetivo">
		<div class="container">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<!--<input type="hidden" id="idCentro" value="{{Session::get('id_center')}}"  name="id_center">-->
				<a href="#newobjetivoCaso" data-toggle="modal" class="btn btn-primary pull-right">Nuevo</a>
				<div class="clearfix"></div>
				<table class="table table-bordered" style="margin-top: 10px;">
					<tr>
						<td>Id</td>
                        <td>Id_Caso</td>
						<td>Descripción</td>
						<td colspan="3">Opciones</td>
					</tr>
					<tr v-for="objetivo in objetivos">
						<td>@{{objetivo.id}}</td>
                        <td>@{{objetivo.id_caso}}</td>
						<td>@{{objetivo.descripcion}}</td>
						<td><a href="" v-on:click.prevent="editobjetivoCaso(objetivo)"><i class="glyphicon glyphicon-pencil" aria-hidden="true"></i></a></td>
						<td><a href="" v-on:click.prevent="deleteobjetivoCaso(objetivo.id)"><i class="glyphicon glyphicon-trash" aria-hidden="true"></i></a></td>
					</tr>
				</table>
			</div>
		</div>
		@include("admin.objetivo.create")
		@include("admin.objetivo.edit")
	</div>
	<script type="text/javascript" src="{{asset('js/controller/ObjetivoController.js')}}"></script>
@endsection
