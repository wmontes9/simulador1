<form action="{{route('competencia.store')}}" method="post">
	{{csrf_field()}}
	<div class="modal fade" id="newCompetencia">
		<div class="modal-dialog">
			<div class="modal-content">
                <div class="modal-header">
                    <button class="close" data-dismiss="modal">&times;</button>
                    <h2 class="text-center">Competencia</h2>
                </div>
				<div class="modal-body">
					<!--<input type="hidden" value="{{ Session::get('competencia') }}" name="id_competencia">-->
					<div class="form-group">
                        <label for="">Codigo</label>
                        <textarea class="form-control" rows="2" name="codigo" v-model="codigo">
                        </textarea>
						@if($errors->has("codigo"))
							<p class="text-danger">{{$errors->first("codigo")}}</p>
						@endif
                    </div>
                    <div class="form-group">
                        <label for="">Descripción</label>
                        <textarea class="form-control" rows="2" name="descripcion" v-model="descripcion">
                        </textarea>
						@if($errors->has("descripcion"))
							<p class="text-danger">{{$errors->first("descripcion")}}</p>
						@endif
                    </div>
                    <div class="form-group">
						<label for="">Video</label>
						<input type="text" name="url_videoc" v-model="url_video_c" class="form-control">
						@if($errors->has("url_videoc"))
							<p class="text-danger">{{$errors->first("url_videoc")}}</p>
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