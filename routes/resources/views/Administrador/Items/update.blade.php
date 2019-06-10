<form method="get" action="{{ url('administrador/items/update', $values->id) }}" id="formEditarItem" >
    {{ csrf_field() }}
    <div class="modal fade" id="item">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4>editar Item</h4>
                </div>
                    <div class="modal-body">
                            <div class="card-body">
                                <div class="form-group row">
                                 
                                    <div class="form-group row" style="margin-left: 20px;">
                                          <label  class="col-sm-4 col-form-label text-md-right">{{ __('Evaluacion') }}</label>
                                    
                                          <div class="col-md-6">
                                <input type="hidden" id="id" name="id">
                                            <select id="evaluacion" name="evaluacion" class="form-control" >
                                             @foreach($evaluacion as $values)

                                              <option value="{{ $values->id }}">{{ $values->nombre }}</option>
                                           
                                            @endforeach
                                            </select>
                                          </div>
                                   </div>

                                        <div class="form-group row" style="margin-left: 20px;">
                                                  <label  class="col-sm-4 col-form-label text-md-right">{{ __('Puntos') }}</label>

                                            <div class="col-md-6">
                                                <input type="text" id="puntos" class="form-control" v-model="puntos" name="puntos">
                                            </div>
                                        </div>

                                         <div class="form-group row" style="margin-left: 20px;">
                                                  <label  class="col-sm-4 col-form-label text-md-right">{{ __('Descripcion') }}</label>

                                            <div class="col-md-6">
                                                <input type="text" id="descripcion" class="form-control" v-model="descripcion" name="descripcion">
                                            </div>
                                        </div>


                                  
                                      <p><input  type="submit"  value="Guardar"  class="btn btn-info" style="margin-left: 300px;"></p>
                        </div>
                         <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                      </div>
                    </div>
                 </div>
             </div>
       </div>        
</div>
</div>
</div>
</form>
