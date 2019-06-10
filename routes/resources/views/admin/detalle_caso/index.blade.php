@extends("layouts.app_admin")
@section("content")
	<div class="row" id="appControllerDetalle">
		<div class="container">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<!--<input type="hidden" id="idCentro" value="{{Session::get('id_center')}}"  name="id_center">-->
				<a href="#newDetalleCaso" data-toggle="modal" class="btn btn-primary pull-right">Nuevo</a>
				<div class="clearfix"></div>
				<table class="table table-bordered" style="margin-top: 10px;">
					<tr>
						<td>Id</td>
                        <td>Id_Caso</td>
						<td>Proposito</td>
                        <td>Audiencia</td>
                        <td>Enfoque</td>
                        <td>Metodo</td>
                        <td>Fecha de elaboración</td>
                        <td>Estado</td>
                        <td>Tiempo promedio</td>
						<td colspan="3">Opciones</td>
					</tr>
					<tr v-for="detalle in detalles">
						<td>@{{detalle.id}}</td>
                        <td>@{{detalle.id_caso}}</td>
						<td>@{{detalle.proposito}}</td>
                        <td>@{{detalle.audiencia}}</td>
                        <td>@{{detalle.enfoque}}</td>
                        <td>@{{detalle.metodo}}</td>
                        <td>@{{detalle.fecha_elaboracion}}</td>
                        <td>@{{detalle.estado}}</td>
                        <td>@{{detalle.tiempo_promedio}}</td>
						<td><a href="" v-on:click.prevent="editDetalleCaso(detalle)"><i class="glyphicon glyphicon-pencil" aria-hidden="true"></i></a></td>
						<td><a href="" v-on:click.prevent="deleteDetalleCaso(detalle.id)"><i class="glyphicon glyphicon-trash" aria-hidden="true"></i></a></td>
					</tr>
				</table>
			</div>
		</div>
		@include("admin.detalle_caso.create")
		@include("admin.detalle_caso.edit")
	</div>
	<script type="text/javascript" src="{{asset('js/controller/DetalleCasoController.js')}}"></script>
@endsection
