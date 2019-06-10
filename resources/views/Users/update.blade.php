
<form method="get" action="{{ url('administrador/users/update', $usuario->id) }}" id="formEditUser">
    {{ csrf_field() }}
    <div class="modal fade" id="editarUser">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="panel panel-primary">
                <div class="modal-header panel-heading">
                    <button class="close" data-dismiss="modal">&times;</button>
                    <h3 class="text-center">Editar usuario</h3>
                  </div>

                    <div class="modal-body">
                        <div class="card-body">

                            <div class="form-group row" style="margin-left: 20px;">
                              <label  class="col-sm-4 col-form-label text-md-right">{{ __('Tipo Documento') }}</label>
                              <div class="col-md-6">
                                <select id="tipodocumento" name="tipodocumento" class="form-control" >
                                  @foreach($tipodocumento as $values)
                                  <option value="{{ $values->id }}">{{ $values->nombre_documento }}</option>
                                  @endforeach
                                </select>
                              </div>
                            </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>{{ __('Nombre') }}</label>
              <input type="text" class="form-control"  id="names" name="names">
              <input type="hidden" name="id" id="id" value="id">
            </div>

            <div class="form-group">
              <label>{{ __('Apellido') }}</label>
              <input type="text" class="form-control"  id="apellidos" name="apellidos">
            </div>

            <div class="form-group">
              <label>{{ __('Documento') }}</label>
              <input type="text" class="form-control"  id="documentos" name="documentos">
            </div>

            <div class="form-group">
              <label>{{ __('Contraseña') }}</label>
              <input type="password" class="form-control"  id="passwords" name="passwords">
            </div>
            <div class="form-group">
                <label>{{ __('Programa') }}</label>
                <select id="programauser" name="programa" class="form-control">
                  <option>--seleccionar--</option>
                  @foreach($programas as $programa)
                  <option value="{{ $programa->id }}">{{ $programa->nombre}}</option>   
                  @endforeach
                </select>
              </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
                <label>{{ __('Estado') }}</label>    
                <select name="estados" id="estados" class="form-control">
                <option value="activo">Activo</option>
                <option value="inactivo">Inactivo</option>
                </select>
            </div>
            <div class="form-group">
              <label>{{ __('Telefono') }}</label>
              <input type="text" class="form-control"  id="telefonos" name="telefonos">
            </div>

            <div class="form-group">
              <label>{{ __('Email') }}</label>
              <input type="text" class="form-control"  id="emails" name="emails">
            </div>
            <div class="form-group">
                <label>{{ __('Tipo usuario') }}</label>
                  <select id="tipousuario" name="tipousuario" class="form-control" >
                    @foreach($rols as $role)
                    <option value="{{ $role->id }}">{{ $role->nombre}}</option>   
                    @endforeach
                  </select>
            </div>
            <div class="form-group">
                <label>{{ __('Ficha') }}</label>
                <select id="fichauser" name="fichauser" class="form-control">
                  <option>--seleccionar--</option>
                </select>
            </div>
          </div>
              <p><input  type="submit"  value="Actualizar"  class="btn btn-info" style="margin-left: 300px;"></p>
        </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
          </div>
      </div>
    </div>
  </div>        
     </div>
    </div>
</form>
