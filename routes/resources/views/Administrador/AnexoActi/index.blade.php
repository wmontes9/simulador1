
<form method="POST" action="{{ route('anexo.store') }}" id="formEditAct">
    {{ csrf_field() }}
    <div class="modal fade" id="anexo">
      <div class="modal-dialog">
        <div class="modal-content">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4>Anexar </h4>
                </div>
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <form action="">
                        <input type="hidden" name="idActividad" value="">
                 <fieldset>
                      <td><input type="checkbox" name="anexo[]" value="{{ url('AnexoActi/remision') }}"><a href="{{ url('AnexoActi/remision') }}">Remision</a><br></td>
                      <td><input type="checkbox" name="anexo[]" value="{{ url('AnexoActi/debito') }}"><a href="{{ url('AnexoActi/debito') }}">Nota Debito</a><br></td>
                      <td><input type="checkbox" name="anexo[]" value="{{ url('AnexoActi/credito') }}"><a href="{{ url('AnexoActi/credito') }}">Nota Credito</a><br></td>
                      <td><input type="checkbox" name="anexo[]" value="{{ url('AnexoActi/caja') }}"><a href="{{ url('AnexoActi/caja') }}">Recibo de Caja</a><br></td>
                      <td><input type="checkbox" name="anexo[]" value="{{ url('AnexoActi/salida') }}" ><a href="{{ url('AnexoActi/salida') }}">Salida de Almacen</a><br></td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><input type="checkbox" name="anexo[]" value="{{ url('AnexoActi/nota') }}"><a href="{{ url('AnexoActi/nota') }}">Nota de Contabilidad</a><br></td>
                      <td><input type="checkbox" name="anexo[]" value="{{ url('AnexoActi/cajamenor') }}"><a href="{{ url('AnexoActi/cajamenor') }}">Recibo de Caja Menor</a><br></td>
                      <td><input type="checkbox" name="anexo[]" value="{{ url('AnexoActi/diario') }}"><a href="{{ url('AnexoActi/diario') }}">Comprobante Diario</a><br> </td>
                      <td><input type="checkbox" name="anexo[]" value="{{ url('AnexoActi/egreso') }}"><a href="{{ url('AnexoActi/egreso') }}">Comprobante de Egreso</a><br></td>
                      <td><input type="checkbox" name="anexo[]" value="{{ url('AnexoActi/ingreso') }}"><a href="{{ url('AnexoActi/ingreso') }}">
                      Comprobante de Ingreso</a><br></td>
                    <tr>
                      <td><input type="checkbox" name="anexo[]" value="{{ url('AnexoActi/formulario') }}"><a href="{{ url('AnexoActi/formulario') }}">Hoja de vida equipos de Computo</a><br></td></td>
                    </tr>
                    </fieldset>
                  </form>
                    </tr>
                  </tbody>
                </table>
                
                    <div class="modal-body">
                        <div class="card-body">
                            <div class="form-group row">
                              <p><input  type="submit"  value="Guardar"  class="btn btn-info text-center" style="margin-left: 300px;"></p>
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

