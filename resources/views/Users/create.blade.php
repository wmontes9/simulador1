<form method="post" action="{{ route('users.store') }}" id="formCreateUser">
    <div class="form-group row">  
     {{ csrf_field() }}
      <div class="modal fade" id="crearUser">
        <div class="modal-dialog">
           <div class="modal-content">
             <div class="panel panel-primary">
              <div class="panel-heading">
                   <h4>Crear Usuarios</h4>
                </div>
                  <div class="modal-body">
                      <div class="card-body">
                          <div class="form-group row" style="margin-left: 20px;">
                                  <label  class="col-sm-4 col-form-label text-md-right">{{ __('Tipo Documento') }}</label>
                            
                                  <div class="col-md-6">
                        
                                    <select name="tipodocumento" class="form-control" >
                                    @foreach($tipodocumento as $values)

                                      <option value="{{ $values->id }}">{{ $values->nombre_documento }}</option>
                                   
                                    @endforeach 
                                    </select>
                                  </div>
                           </div>
                          <div class="form-group row" style="margin-top: 20px;">
                                    <label  class="col-sm-4 col-form-label text-md-right"  style="margin-left: 100px;">{{ __('Nombre') }}</label>
                            <div class="col-md-4">
                                  <input type="text" class="form-control"  id="name" name="name">
                            </div>
                          </div>

                          <div class="form-group row">
                                    <label  class="col-sm-4 col-form-label text-md-right"  style="margin-left: 100px;">{{ __('Apellido') }}</label>
                            <div class="col-md-4">
                                  <input type="text" class="form-control"  id="apellido" name="apellido">
                            </div>
                          </div>

                          <div class="form-group row">
                                    <label  class="col-sm-4 col-form-label text-md-right"  style="margin-left: 100px;">{{ __('Documento') }}</label>
                            <div class="col-md-4">
                                  <input type="text" class="form-control"  id="documento" name="documento">
                            </div>
                          </div>
                   
                          <div class="form-group row">
                                    <label  class="col-sm-4 col-form-label text-md-right"  style="margin-left: 100px;">{{ __('Contraseña') }}</label>
                            <div class="col-md-4">
                                  <input type="password" class="form-control"  id="password" name="password">
                            </div>
                          </div>

                          <div class="form-group row">
                                    <label  class="col-sm-4 col-form-label text-md-right"  style="margin-left: 100px;">{{ __('Estado') }}</label>
                              <div class="col-md-4">      
                                <select name="estado" id="estado" class="form-control">
                                     <option value="activo">Activo</option>
                                     <option value="inactivo">Inactivo</option>
                                </select>
                              </div>
                          </div>

                          <div class="form-group row">
                                    <label  class="col-sm-4 col-form-label text-md-right"  style="margin-left: 100px;">{{ __('Telefono') }}</label>
                            <div class="col-md-4">
                                  <input type="text" class="form-control"  id="telefono" name="telefono">
                            </div>
                          </div>

                          <div class="form-group row">
                                    <label  class="col-sm-4 col-form-label text-md-right"  style="margin-left: 100px;">{{ __('Email') }}</label>
                            <div class="col-md-4">
                                  <input type="text" class="form-control"  id="email" name="email">
                            </div>
                          </div>
                          <p><input type="submit" value="Guardar" class="btn btn-info btn-block"></p>
                      </div>
                   </div>
               </div>        
            </div>
          </div>
       </div>
    </div>
</form>
