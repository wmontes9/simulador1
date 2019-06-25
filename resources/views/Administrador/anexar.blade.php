@extends("layouts.admin")
@section("content")

<div class="container">
<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="#">Ver Todos</a>
    </div>

  <ul class="nav navbar-nav">
    <a  class="navbar-brand"data-toggle="modal" data-target="#myModal">Crear  Nueva Actividad</a>

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
  </ul>
</nav>

<h1>Lista Actividades</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>Id</td>
            <td>Resultado</td>
            <td>Descripcion</td>
            <td>Estado</td>
            <td></td>
            
        </tr>
    </thead>
    <tbody>
    @foreach($actividad as $value)
        <tr>
            <td>{{ $value->id}}</td>
            <td>{{ $value->nombre }}</td>
            <td>{{ $value->descripcion}}</td>
            <td>{{ $value->estado }}</td>

       
            <td>
             <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                <a class="btn btn-small btn-info" id="edita" data-id="{{ $value->id }}" data-resul="{{ $value->idresultado }}" data-estado="{{ $value->estado }}" data-desc="{{ $value->descripcion}}" data-toggle="modal" data-target="#editar" href="#">Editar</a>
                <a class="btn btn-small btn-danger" href="{{ url('administrador/actividad/delete', $value->id) }}">Eliminar</a>           
              </td>

           </tr>
    @endforeach
</tbody>

</table> 
@include("Administrador.update")
@include("Administrador/AnexoActi.index")
</div>
@endsection