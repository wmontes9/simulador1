<form  v-on:submit.prevent="updateRespuesta(fillRespuesta.id)">
    <div class="modal fade" id="editRespuesta">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" data-dismiss="modal">&times;</button>
                    <h3 class="text-center">Respuesta</h3>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Descripción</label>
                        <textarea class="form-control" rows="2" name="descripcion" v-model="fillRespuesta.descripcion">
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="">validación</label>
                        <select name="validacion" v-model="fillRespuesta.validacion" id="validacion" class="form-control">
                            <option value="" selected="selected">--Seleccione--</option>
                            <option value="false">False</option>
                            <option value="true">True</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </div>
            </div>
        </div>
    </div>
</form>