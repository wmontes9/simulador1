<form action="{{route('detalle.store')}}" method="post">
	{{csrf_field()}}
	<div class="modal fade" id="newDetalleCaso">
		<div class="modal-dialog">
			<div class="modal-content">
                <div class="modal-header">
                    <button class="close" data-dismiss="modal">&times;</button>
                    <h2 class="text-center">Detalle caso</h2>
                </div>
				<div class="modal-body">
					<!--<input type="hidden" value="{{ Session::get('competencia') }}" name="id_competencia">-->
					<div class="form-group">
                        <label for="">Proposito</label>
                        <textarea class="form-control" rows="2" name="proposito" v-model="proposito">
                        </textarea>
						@if($errors->has("proposito"))
							<p class="text-danger">{{$errors->first("proposito")}}</p>
						@endif
                    </div>
                    <div class="form-group">
                        <label for="">Audiencia</label>
                        <textarea class="form-control" rows="2" name="audiencia" v-model="audiencia">
                        </textarea>
						@if($errors->has("audiencia"))
							<p class="text-danger">{{$errors->first("audiencia")}}</p>
						@endif
                    </div>
                    <div class="form-group">
                        <label for="">Enfoque</label>
                        <textarea class="form-control" rows="2" name="enfoque" v-model="enfoque">
                        </textarea>
						@if($errors->has("enfoque"))
							<p class="text-danger">{{$errors->first("enfoque")}}</p>
						@endif
                    </div>
                    <div class="form-group">
                        <label for="">Metodo</label>
                        <textarea class="form-control" rows="2" name="metodo" v-model="metodo">
                        </textarea>
						@if($errors->has("metodo"))
							<p class="text-danger">{{$errors->first("metodo")}}</p>
						@endif
                    </div>
                    <div class="form-group">
						<label for="">Fecha elaboración</label>
						<input type="date" name="fecha_elaboracion" v-model="fecha_elaboracion" class="form-control">
						@if($errors->has("fecha_elaboracion"))
							<p class="text-danger">{{$errors->first("fecha_elaboracion")}}</p>
						@endif
                    </div>
                    <div class="form-group">
                        <label for="">Estado</label>
                        <select class="form-control" name="estado" v-model="estado">
                            <option value="0">--Seleccionar--</option>
                            <option value="1">Activo</option>
                            <option value="2">Inactivo</option>
                        </select>
						@if($errors->has("estado"))
							<p class="text-danger">{{$errors->first("estado")}}</p>
						@endif
                    </div>
                    <div class="form-group">
						<label for="">Tiempo promedio</label>
						<input type="text" name="tiempo_promedio" v-model="tiempo_promedio" class="form-control">
						@if($errors->has("tiempo_promedio"))
							<p class="text-danger">{{$errors->first("tiempo_promedio")}}</p>
						@endif
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-success">Crear</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>