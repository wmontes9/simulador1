<form action="{{route('conocimiento.store')}}" method="post">
	{{csrf_field()}}
	<div class="modal fade" id="newConocimiento">
		<div class="modal-dialog">
			<div class="modal-content">
                <div class="modal-header">
                    <button class="close" data-dismiss="modal">&times;</button>
                    <h2 class="text-center">Conocimiento</h2>
                </div>
				<div class="modal-body">
					<!--<input type="hidden" value="{{ Session::get('competencia') }}" name="id_competencia">-->
					<div class="form-group">
                        <label for="">Descripción</label>
                        <textarea class="form-control" rows="2" name="descripcion" v-model="descripcion">
						</textarea>
						@if($errors->has("descripcion"))
							<p class="text-danger">{{$errors->first("descripcion")}}</p>
						@endif
					</div>
					<div class="form-group">
						<label for="">Tipo conocimiento</label>
						<select v-model="nombre_tipo" class="form-control" name="nombre_tipo">
							<option value="" selected="selected">--Seleccione--</option>
							<option v-for="tipo in tipos" v-bind:value="tipo.id">@{{tipo.nombre_tipo}}</option>
						</select>							   
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-success">Crear</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>