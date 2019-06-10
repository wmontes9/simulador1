@extends("layouts.app_admin")
    @section("content")
        <div class="container">
            <div class="row text-center">
                <h3>Items</h3>
            </div>
            <a href="#myModal" data-target="#myModal" data-toggle="modal" class="btn btn-primary pull-right">Nuevo</a>
            <form method="post" action="{{ route('items.store') }}">
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
                                                <label  class="col-sm-4 col-form-label text-md-right">{{ __('Evaluacion') }}</label>
                                                <div class="col-md-6">
                                                    <select name="actividad" class="form-control" >
                                                        @foreach($evaluacion as $values)
                                                        <option value="{{ $values->id }}">{{ $values->descripcion }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row" style="margin-left: 20px;">
                                                <label  class="col-sm-4 col-form-label text-md-right">{{ __('Puntos') }}</label>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" v-model="puntos" name="puntos">
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
            <!-- will be used to show any messages -->
            @if (Session::has('message'))
                <div class="alert alert-info">{{ Session::get('message') }}</div>
            @endif
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <td>id</td>
                        <td>Evaluacion</td>
                        <td>Puntos</td>
                        <td>Descripcion</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($item as $values)
                        <tr>
                            <td>{{ $values->id  }}</td>
                            <td>{{ $values->nombre }}</td>
                            <td>{{ $values->puntos }}</td>
                            <td>{{ $values->descripcion }}</td>
                            <td>
                            <a class="btn btn-small btn-info" id="editaritem" data-id="{{ $values->id }}" data-eva="{{ $values->ids }}" data-nombre="{{ $values->puntos }}" data-descrip="{{ $values->descripcion }}" data-toggle="modal" data-target="#item" href="#">Editar</a>
                            <a class="btn btn-small btn-danger" href="{{ url('administrador/items/delete', $values->id) }}">Eliminar</a>
                            </td>
                        </tr>
                    @endforeach()
                </tbody>
            </table>
            @include("administrador/Items.update")
        </div>
    @endsection