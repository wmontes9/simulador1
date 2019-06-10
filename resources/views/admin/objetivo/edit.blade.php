<form  v-on:submit.prevent="updateObjetivo(fillObjetivo.id)">
        <div class="modal fade" id="editobjetivoCaso">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" data-dismiss="modal">&times;</button>
                        <h3 class="text-center">Objetivo</h3>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Descripción</label>
                            <textarea class="form-control" rows="2" name="descripcion" v-model="fillObjetivo.descripcion">
                            </textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                    </div>
                </div>
            </div>
        </div>
    </form>