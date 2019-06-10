@extends("layouts.app_admin")
@section("content")
<div class="container">
    <a href="#myModal" data-target="#myModal" data-toggle="modal" class="btn btn-primary pull-right">Nuevo</a>
     <form method="post" action="{{ route('Opciones.store') }}">
        {{ csrf_field() }}
        <div class="modal fade" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4>Nueva Opcion</h4>
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
        </div>
    </form>
    <h3>Opciones</h3>

    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
    <br><br>
    <table class="table table-striped table-bordered table-responsive">
        <thead>
            <tr>
                <th>Id</th>
                <th>Actividad</th>
                <th>Descripcion</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($opcion as $values)
                <tr>
                    <td>{{ $values->id}}</td>
                    <td>{{ $values->id_actividad}}</td>
                    <td>{{ $values->descripcion }}</td>
                    <td>
                    <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                        <a class="btn btn-small btn-info" id="opciones" data-id="{{ $values->id }}" data-acti="{{ $values->id_actividad }}" data-descri="{{ $values->descripcion }}"  data-toggle="modal" data-target="#opcion"  href="#">Editar</a>
                        <a class="btn btn-small btn-danger" href="{{ url('administrador/Opciones/delete', $values->id) }}">Eliminar</a>
                    </td>

                </tr>
            @endforeach()
        </tbody>
    </table>
    @include("Administrador.Opciones.update")
</div>
@endsection
