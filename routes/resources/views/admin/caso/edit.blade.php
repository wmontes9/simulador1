<form enctype="multipart/form-data" id="formUpdateCaso" action="" method="POST">
    {{csrf_field()}}
    <div class="modal fade" id="editCaso">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button class="close" data-dismiss="modal">&times;</button>
                    <h3 class="text-center">Editar caso</h3>
				</div>
				<div class="modal-body">
					<div class="form-group">
                        <label for="">Titulo</label>
                    <input type="hidden" :value="'{{url('admin/caso/update')}}/'" id="ruta" class="form-control">
						<input type="text" name="titulo" v-model="fillCaso.titulo" class="form-control">
					</div>
					<div class="form-group">
						<label for="">Descripción</label>
						<textarea class="form-control" rows="10" name="descripcion" v-model="fillCaso.descripcion">
						</textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Imagen</label>
                        <input type="file" id="url_imagen_e" name="url_imagen_e"  class="form-control">
					</div>
					<div class="form-group">
                        <label for="">Imagen</label>
                        <img :src="'{{url('/imgcaso')}}/'+fillCaso.url_imagen" class="img-responsive">
					</div>
					<div class="form-group">
						<label for="">url_video</label>
						<input type="text" name="video_e" v-model="fillCaso.url_video" class="form-control">                        
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Actualizar</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>