<form  v-on:submit.prevent="updateConocimiento(fillConocimiento.id)">
    <div class="modal fade" id="editConocimiento">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                        <button class="close" data-dismiss="modal">&times;</button>
                    <h3 class="text-center">Conocimiento</h3>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Descripción</label>
                        <textarea class="form-control" rows="2" name="descripcion" v-model="fillConocimiento.descripcion"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Tipo conocimiento</label>
                        <select id="tipo" v-model="fillConocimiento.id_tipo" class="form-control">
                            <option v-for="tipo in tipos" v-bind:value="tipo.id">@{{tipo.nombre_tipo}}
                            </option>
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