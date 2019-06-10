<form method="get" action="{{ url('administrador/update', $value->id) }}" id="formEditAct">
    {{ csrf_field() }}
    <div class="modal fade" id="editar">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4>editar Actividad</h4>
                </div>
                    <div class="modal-body">
                        <div class="card-body">
                          <div class="form-group row" style="margin-left: 20px;">
                                              <label  class="col-sm-4 col-form-label text-md-right">{{ __('Resultado') }}</label>
                                      <div class="col-md-6">

                                         <select name="result" id="result"  class="form-control">
                                           @foreach($resultado as $values)

                                             <option value="{{ $values->id }}">{{ $values->descripcion }}</option>  
                                            @endforeach
                                         </select>   
                                      </div>
                            </div>

                            <div class="form-group row">                         
                                    <div class="form-group row" style="margin-left: 20px;">
                                              <label  class="col-sm-4 col-form-label text-md-right">{{ __('Descripcion') }}</label>
                                     <div class="col-md-6">
                                          <input type="hidden" id="id" name="id">
                                            <input type="text" class="form-control"  id="descripcion" name="descripcion">  
                                      </div>
                              </div>
                  
                                  <div class="form-group row" style="margin-left: 20px;">
                                              <label  class="col-sm-4 col-form-label text-md-right">{{ __('Estado') }}</label>
                                      <div class="col-md-6">      
                                         <select name="estado" id="estado" class="form-control">
                                               <option value="activo">Activo</option>
                                               <option value="inactivo">Inactivo</option>
                                          </select>
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
</form>
