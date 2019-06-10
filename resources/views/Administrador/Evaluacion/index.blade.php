@extends("layouts.app_admin")
@section("content")
<div class="container">
    <div class="row text-center">
        <h3>Evaluación</h3>
    </div>
    <a href="#myModal" data-toggle="modal" class="btn btn-primary pull-right">Nuevo</a>
    <form method="post" action="{{ route('evaluacion.store') }}">
    {{ csrf_field() }}
        <div class="modal fade" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4>Nueva Evaluacion</h4>
                        </div>
                        <div class="modal-body">
                            <div class="card-body">
                                <div class="form-group row">
                                
                                    <div class="form-group row" style="margin-left: 20px;">
                                        <label  class="col-sm-4 col-form-label text-md-right">{{ __('Actividad') }}</label>
                                    
                                        <div class="col-md-6">
                                
                                            <select name="actividad" class="form-control" >
                                            @foreach($actividad as $values)

                                            <option value="{{ $values->id }}">{{ $values->descripcion }}</option>
                                        
                                            @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row" style="margin-left: 20px;">
                                        <label  class="col-sm-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                                    <div class="col-md-6">
                                        <input type="text" class="form-control" v-model="nombre" name="nombre">
                                    </div>
                                </div>

                                <div class="form-group row" style="margin-left: 20px;">
                                        <label  class="col-sm-4 col-form-label text-md-right">{{ __('Descripcion') }}</label>

                                    <div class="col-md-6">
                                        <input type="text" class="form-control" v-model="descripcion" name="descripcion">
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
  <a class="btn btn-small btn-info "   href="{{ route('items.index')}}" >item</a>
<br>
<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
<br><br>
<table class="table table-striped table-bordered">
    <thead>
        <tr>
          <td>id</td>
            <td>Actividad</td>
            <td>Nombre</td>
            <td>Descripcion</td>
            <td>Items</td>
            
        </tr>
    </thead>
    <tbody>
@foreach($evaluacion as $value)
  <tr>

    <td>{{ $value ->id }}</td>
    <td>{{ $value ->nombre_descripcion }}</td>
    <td>{{ $value ->nombre }}</td>
    <td>{{ $value ->descripcion}}</td>
    <td>
       <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                <a class="btn btn-small btn-info" id="editareva" data-id="{{ $value->id }}" data-acti="{{ $value->id_actividad }}" data-nombre="{{ $value->nombre }}" data-descri="{{ $value->descripcion }}"  data-toggle="modal" data-target="#evaluacion" href="#">Editar</a>
                <a class="btn btn-small btn-danger" href="{{ url('administrador/evaluacion/delete', $value->id) }}">Eliminar</a>
    </td>
  </tr>

@endforeach()
</tbody>

</table> 
@include("Administrador/Evaluacion.update")
</div>

@endsection