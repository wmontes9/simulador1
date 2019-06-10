<form  v-on:submit.prevent="updateFicha(fillFicha.id)">
    <div class="modal fade" id="editFicha">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" data-dismiss="modal">&times;</button>
                    <h3 class="text-center">Ficha</h3>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                            <label for="">Código</label>
                            <input type="text" class="form-control" name="codigo" v-model="fillFicha.codigo">
                            @if($errors->has("codigo"))
                                <p class="text-danger">{{$errors->first("codigo")}}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">Fecha inicio</label>
                            <input type="date" name="fecha_inicio" v-model="fillFicha.fecha_inicio" class="form-control">
                            @if($errors->has("fecha_inicio"))
                                <p class="text-danger">{{$errors->first("fecha_inicio")}}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">Fecha fin</label>
                            <input type="date" name="fecha_fin" v-model="fillFicha.fecha_fin" class="form-control">
                            @if($errors->has("fecha_fin"))
                                <p class="text-danger">{{$errors->first("fecha_fin")}}</p>
                            @endif
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </div>
            </div>
        </div>
    </div>
</form>