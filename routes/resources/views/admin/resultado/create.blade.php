<form action="{{route('resultado.store')}}" method="post">
	{{csrf_field()}}
	<div class="modal fade" id="newResultado">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button class="close" data-dismiss="modal">&times;</button>
					<h2 class="text-center">Resultado</h2>
				</div>
				<div class="modal-body">
					<input type="hidden" value="{{ Session::get('competencia') }}" name="id_competencia">
					<div class="form-group">
						<label for="codigo">Codigo</label>
						<input type="text" name="codigo" v-model="codigo" class="form-control">
						@if($errors->has("nombre"))
							<p class="text-danger">{{$errors->first("codigo")}}</p>
						@endif
					</div>
					<div class="form-group">
						<label for="descripcion">Descripcion</label>
						<input type="text" v-model="descripcion" name="descripcion" class="form-control">
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