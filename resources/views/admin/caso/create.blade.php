<form enctype="multipart/form-data" action="{{route('caso.store')}}" method="POST">
	{{csrf_field()}}
	<div class="modal fade" id="newCaso">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button class="close" data-dismiss="modal">&times;</button>
					<h3 class="text-center">Caso</h3>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="">Titulo</label>
						<input type="text" name="titulo" v-model="titulo" class="form-control">
					</div>
					<div class="form-group">
						<label for="">Descripción</label>
						<textarea class="form-control" rows="2" name="descripcion" v-model="descripcion">
						</textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Imagen</label>
                        <input type="file" id="url_imagen" name="url_imagen"  class="form-control">
					</div>
					<div class="form-group">
						<label for="">url_video</label>
						<input type="text" name="video" v-model="fillCaso.url_video" class="form-control">                        
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Crear</button>
					</div>				
				</div>
			</div>
		</div>
	</div>
</form>