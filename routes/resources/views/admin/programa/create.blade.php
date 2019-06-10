<form v-on:submit.prevent="createProgram()">
	{{csrf_field()}}
	<div class="modal fade" id="newProgram">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
					<h3>Programas</h3>
					<div class="form-group">
						<label for="">Nombre</label>
						<input type="text" name="nombre" v-model="nombre" class="form-control">
					</div>
					<div class="form-group">
						<label for="">Codigo</label>
						<input type="text" name="codigo" v-model="codigo" class="form-control">
					</div>
					<div class="form-group">
					<label for="">Nivel de formación</label>
					<select name="nivel" v-model="nivel_formacion" id="nivel" class="form-control">
						<option value="" selected="selected">--Seleccione--</option>
						<option value="Tecnológo">Tecnológo</option>
						<option value="Técnico">Técnico</option>
					</select>
					</div>
					<div class="form-group">
					<label for="">Estado</label>
					<select name="estado" v-model="estado" id="estado" class="form-control">
						<option value="" selected="selected">--Seleccione--</option>
						<option value="Activo">Activo</option>
						<option value="Inactivo">Inactivo</option>
					</select>
					</div>
					<div class="form-group">
						<label for="">Version</label>
						<input type="text" name="version" v-model="version" class="form-control">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Crear</button>
					</div>				
				</div>
			</div>
		</div>
	</div>
</form>