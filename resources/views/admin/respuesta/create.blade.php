<form action="{{route('respuesta.store')}}" method="post">
	{{csrf_field()}}
	<div class="modal fade" id="newRespuesta">
		<div class="modal-dialog">
			<div class="modal-content">
                <div class="modal-header">
                    <button class="close" data-dismiss="modal">&times;</button>
                    <h2 class="text-center">Respuesta</h2>
                </div>
				<div class="modal-body">
					<!--<input type="hidden" value="{{ Session::get('competencia') }}" name="id_competencia">-->
                    <div class="form-group">
                        <label for="">Descripción</label>
                        <textarea class="form-control" rows="2" name="descripcion" v-model="fillRespuesta.descripcion">
						</textarea>
						@if($errors->has("descripcion"))
							<p class="text-danger">{{$errors->first("descripcion")}}</p>
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