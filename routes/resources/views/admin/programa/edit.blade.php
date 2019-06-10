<form v-on:submit.prevent="updateProgram(fillProgram.id)">
	<div class="modal fade" id="editProgram">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button class="close" data-dismiss="modal">&times;</button>
					<h3 class="text-muted">Editar programa</h3>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="">Nombre</label>
						<input type="text" name="nombre" v-model="fillProgram.nombre" class="form-control">
					</div>
					<div class="form-group">
						<label for="">Codigo</label>
						<input type="text" name="codigo" v-model="fillProgram.codigo" class="form-control">
					</div>
					<div class="form-group">
						<label for="">Nivel de formación</label>
						<select name="nivel_formacion" v-model="fillProgram.nivel_formacion" id="nivel_formacion" class="form-control">
						<option value="">--Seleccione--</option>
						<option value="Tecnológo" @if("Tecnológo = @{{fillProgram.nivel_formacion}}")
						selected="selected"
						@endif>Tecnológo</option>
						<option value="Técnico" @if("Técnico = @{{fillProgram.nivel_formacion}}")
						selected="selected"
						@endif>Técnico</option>
					</select>
					</div>
					<div class="form-group">
					<label for="">Estado</label>
					<select name="estado" v-model="fillProgram.estado" id="estado" class="form-control">
						<option value="">--Seleccione--</option>
						<option value="activo" @if("activo = @{{fillProgram.estado}}")
						selected="selected"
						@endif>Activo</option>
						<option value="inactivo" @if("inactivo = @{{fillProgram.estado}}")
						selected="selected"
						@endif>Inactivo</option>
					</select>
					</div>
					<div class="form-group">
						<label for="">Version</label>
						<input type="text" name="version" v-model="fillProgram.version" class="form-control">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Actualizar</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>