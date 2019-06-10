@extends("layouts.app_admin")
@section("content")

	<div class="row" id="appControllercompetencia">
  <form action="" v-on:submit.prevent="newCompetencia()">
		<div class="container">
    <table class="table table-bordered table-striped table-responsive">
            <tr>
              <th>#</th>
              <th>Codigo</th>
              <th colspan="3">Descripción</th>
              <th>Url_video</th>
              <th colspan="5" class="text-center">Opciones</th>
              <th width="30"><i class="glyphicon glyphicon-plus"  v-on:click.prevent="ShowFormGrup()"></i></th>
            </tr>
            <tr v-for="competencia in competencias">
              <td>@{{competencia.id}}</td>
              <td>@{{competencia.codigo}}</td>
              <td colspan="3">@{{competencia.descripcion}}</td>
              <td colspan="2" style="width: 40px;">@{{competencia.url_videoc}}</td>
              <td><a href="" v-on:click.prevent="getResultados(competencia.id)">Resultados</a></td>
              <td><a href="" v-on:click.prevent="getConocimientos(competencia.id)">Conocimientos</a></td>
              <td><a href="" v-on:click.prevent="getCuestionarios(competencia.id)">Cuestionario</a></td>
              <td><a href="" v-on:click.prevent="editComp(competencia)"><i class="glyphicon glyphicon-pencil" aria-hidden="true"></i></a></td>
              <td><a href="" v-on:click.prevent="deleteComp(competencia.id)"><i class="glyphicon glyphicon-trash" aria-hidden="true"></i></a></td>
            </tr>
            <tr class="formNewGrupo">
              <td>#</td>
              <td><input type="text" class="form-control" name="codigo" v-model="newCodigo" placeholder="Ingresar codigo"></td>
              <td colspan="3">
              <textarea class="form-control" rows="5" id="comment" name="descripcion" v-model="newDescripcion">
							</textarea>
              </td>
              <td><input type="text" class="form-control" name="videoc" v-model="newvideoc" placeholder="Ingresar url"></td>
              <td><p class="text-muted" disable>Resultados</p> </td>
              <td><p class="text-muted" disable>Conocimientos</p> </td>
              <td><i class="glyphicon glyphicon-pencil" aria-hidden="true"></i></td>
              <td width="20" colspan="3"><button type="submit" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-floppy-saved" aria-hidden="true"></i></button></td>
            </tr>
          </table>
		</div>
    @include("admin.competencia.edit")
    </form>
	</div>
  <script type="text/javascript" src="{{asset('js/controller/CompetenciaController.js')}}"></script>

@endsection