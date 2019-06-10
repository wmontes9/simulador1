@extends("layouts.app_admin")
@section("content")

<div class="container">
        <div class="row text-center">
                <h3>Actividades</h3>
            </div>  
        <a href="#myModal" data-toggle="modal" class="btn btn-primary pull-right">Nuevo</a>
     <form method="post" action="{{ route('actividad.store') }}">
        {{ csrf_field() }}
        <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4>Nueva Actividad</h4>
                    </div>
                        <div class="modal-body">
                            <div class="card-body">
                                <div class="form-group row">
                                 
                                    <div class="form-group row" style="margin-left: 20px;">
                                          <label  class="col-sm-4 col-form-label text-md-right">{{ __('Resultado') }}</label>
                                    
                                          <div class="col-md-6">
                                
                                            <select name="resultado" class="form-control" >
                                            @foreach($resultado as $values)

                                              <option value="{{ $values->id }}">{{ $values->descripcion }}</option>
                                           
                                            @endforeach
                                              
                                            </select>
                                          </div>
                                   </div>

                                        <div class="form-group row" style="margin-left: 20px;">
                                                  <label  class="col-sm-4 col-form-label text-md-right">{{ __('Descripcion') }}</label>

                                            <div class="col-md-6">
                                                <input type="text" class="form-control" v-model="descripcion" name="descripcion">
                                            </div>
                                        </div>

                                         <div class="form-group row" style="margin-left: 20px;">
                                                  <label  class="col-sm-4 col-form-label text-md-right">{{ __('Estado') }}</label>

                                            <div class="col-md-6">
                                            <select name="estado" class="form-control" >
                                               <option value="Activo">Activo</option>
                                               <option value="Inactivo">Inactivo</option>
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
 </form>
</div>
<!--<a class="navbar-brand btn btn-primary pull-right"  href="{{ route('evaluacion.index')}}">Evaluacion</a>-->
<br>
<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
<br><br>
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Anexos</th>
            <th>Id</th>
            <th>Resultado</th>
            <th>Descripcion</th>
            <th>Estado</th>
            <th>Opciones</th>
            
        </tr>
    </thead>
    <tbody>
    @foreach($actividad as $value)
        <tr>
            <td style="width:40px"><button class="btn btn-warning show_anexo" data-id="{{ $value->id }}">Ver</button></td>
            <td>{{ $value->id}}</td>
            <td>{{ $value->nombre }}</td>
            <td>{{ $value->descripcion}}</td>
            <td>{{ $value->estado }}</td>
            <td>
             <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                <a class="btn btn-small btn-info" id="edita" data-id="{{ $value->id }}" data-resul="{{ $value->idresultado }}" data-estado="{{ $value->estado }}" data-desc="{{ $value->descripcion}}" data-toggle="modal" data-target="#editar" href="#">Editar</a>
                <a class="btn btn-small btn-success anexo" data-id="{{ $value->id }}"   href="#">Anexar</a>
                <a class="btn btn-small btn-danger" href="{{ url('administrador/actividad/delete', $value->id) }}">Eliminar</a>

              </td>

           </tr>
    @endforeach
</tbody>

</table> 

@include("Administrador/AnexoActi.index")
@include("Administrador/AnexoActi.anexo_actividad")
</div>
@endsection