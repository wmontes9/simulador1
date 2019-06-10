<form  v-on:submit.prevent="updateResultado(fillResultado.id)">
	<div class="modal fade" id="editResultado">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button class="close" data-dismiss="modal">&times;</button>
					<h2 class="text-center">Resultado</h2>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="">Codigo</label>
						<input type="text"  name="codigo"  v-model="fillResultado.codigo" class="form-control">
					</div>
					<div class="form-group">
						<label for="">Descripcion</label>
						<input type="text" name="descripcion" v-model="fillResultado.descripcion" class="form-control">
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Actualizar</button>
				</div>
			</div>
		</div>
	</div>
</form>