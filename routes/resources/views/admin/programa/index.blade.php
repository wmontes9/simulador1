@extends("layouts.app_admin")

@section("content")
<div class="row text-center">
        <h3>Programas</h3>
    </div>
	<div class="row" id="appControllerProgram">
		<div class="container">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<a href="#newProgram" data-toggle="modal" class="btn btn-primary pull-right">Nuevo</a>
				<div class="clearfix"></div>
				<table class="table table-bordered" style="margin-top: 10px;">
					<tr>
						<td>Id</td>
						<td>Codigo</td>
						<td>Nombre</td>
						<td>Nivel formación</td>
						<td>Estado</td>
						<td>Versión</td>
						<td colspan="5">Opciones</td>
					</tr>
					<tr v-for="program in programs">
						<td>@{{program.id}}</td>
						<td>@{{program.codigo}}</td>
						<td>@{{program.nombre}}</td>
						<td>@{{program.nivel_formacion}}</td>
						<td>@{{program.estado}}</td>
						<td>@{{program.version}}</td>
						<td><a href="" v-on:click.prevent="editProgram(program)"><i class="glyphicon glyphicon-pencil" aria-hidden="true"></i></a></td>
						<td><a href="" v-on:click.prevent="deleteProgram(program.id)"><i class="glyphicon glyphicon-trash" aria-hidden="true"></i></a></td>
						<td><a href="" v-on:click.prevent="getCompetencia(program.id,program.nombre)">Competencias</a></td>
						<td><a href="" v-on:click.prevent="getfichas(program.id)">Fichas</a></td>
					</tr>
				</table>
			</div>
			@include("admin.programa.edit")
		    @include("admin.programa.create")
			@include("admin.competencia.index")
			@include("admin.competencia.edit")
		</div>
		
		
	</div>
	<script type="text/javascript" src="{{asset('js/controller/ProgramaController.js')}}"></script>
@endsection
