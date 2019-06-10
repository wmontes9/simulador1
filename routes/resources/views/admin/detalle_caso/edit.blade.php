<form  v-on:submit.prevent="updateDetalleCaso(fillDetalle.id)">
	<div class="modal fade" id="editDetalleCaso">
		<div class="modal-dialog">
			<div class="modal-content">
                <div class="modal-header">
                    <button class="close" data-dismiss="modal">&times;</button>
                    <h3 class="text-center">Detalle caso</h3>
                </div>
				<div class="modal-body">
					<div class="form-group">
                        <label for="">Proposito</label>
                        <textarea class="form-control" rows="2" name="proposito" v-model="fillDetalle.proposito">
                        </textarea>
					</div>
					<div class="form-group">
                        <label for="">Audiencia</label>
                        <textarea class="form-control" rows="2" name="audiencia" v-model="fillDetalle.audiencia">
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Enfoque</label>
                        <textarea class="form-control" rows="2" name="enfoque" v-model="fillDetalle.enfoque">
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Metodo</label>
                        <textarea class="form-control" rows="2" name="metodo" v-model="fillDetalle.metodo">
                        </textarea>
                    </div>
                    <div class="form-group">
						<label for="">Fecha elaboración </label>
						<input type="text" name="fecha_elaboracion" v-model="fillDetalle.fecha_elaboracion" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Estado</label>
                        <select v-model="fillDetalle.estado" id="estado" class="form-control">
                            <option value="activo">Activo</option>
                            <option value="inactivo">Inactivo</option>
                        </select>
                    </div>
                    <div class="form-group">
						<label for="">Tiempo promedio</label>
						<input type="text" name="tiempo_promedio" v-model="fillDetalle.tiempo_promedio" class="form-control">
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Actualizar</button>
				</div>
			</div>
		</div>
	</div>
</form>