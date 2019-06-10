<form action="{{route('cuestionario.store')}}" method="post">
	{{csrf_field()}}
	<div class="modal fade" id="newCuestionario">
		<div class="modal-dialog">
			<div class="modal-content">
                <div class="modal-header">
                    <button class="close" data-dismiss="modal">&times;</button>
                    <h2 class="text-center">Cuestionario</h2>
                </div>
				<div class="modal-body">
					<!--<input type="hidden" value="{{ Session::get('competencia') }}" name="id_competencia">-->
                    <div class="form-group">
                        <label for="">Titulo</label>
                        <input type="text" class="form-control" name="titulo" v-model="titulo">
                        @if($errors->has("titulo"))
							<p class="text-danger">{{$errors->first("titulo")}}</p>
						@endif
                    </div>
                    <div class="form-group">
                        <label for="">Descripción</label>
                        <textarea class="form-control" rows="2" name="descripcion" v-model="fillCuestionario.descripcion">
						</textarea>
						@if($errors->has("descripcion"))
							<p class="text-danger">{{$errors->first("descripcion")}}</p>
						@endif
                    </div>
                    <div class="form-group">
                            <label for="">Estado</label>
                            <select name="estad" v-model="fillCuestionario.estad" id="estad" class="form-control">
                                <option value="" selected="selected">--Seleccione--</option>
                                <option value="Activo">Activo</option>
                                <option value="Inactivo">Inactivo</option>
                            </select>
                    </div>
                    <div class="form-group">
                        <label for="">Duracion</label>
                        <input type="text"  name="duracion" v-model="fillCuestionario.duracion" class="form-control">
                    </div>
					<div class="form-group">
						<button type="submit" class="btn btn-success">Crear</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>