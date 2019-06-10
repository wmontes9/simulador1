<form v-on:submit.prevent="updateComp()">
	<div class="modal fade" id="editGrup">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-body">
					<div class="modal-header">
						<button class="close" data-dismiss="modal">&times;</button>
						<h3>Competencia</h3>
					</div>
					<div class="form-group">
						<label for="">Codigo</label>
						<input type="text"  name="codigo" v-model="fillCompetencia.codigo" class="form-control">
					</div>
					<div class="form-group">
						<label for="">Descripción</label>
						<input type="text" name="descripcion" v-model="fillCompetencia.descripcion" class="form-control">
					</div>
					<div class="form-group">
						<label for="">Url_video</label>
						<input type="text" name="url_videoc" v-model="fillCompetencia.url_videoc" class="form-control">
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Actualizar</button>
				</div>
			</div>
		</div>
	</div>
</form>