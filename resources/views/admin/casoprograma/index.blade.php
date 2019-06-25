@extends("layouts.app_admin")

@section("content")
<div class="container">
    <form action="{{route('detalleresultado.store')}}" method="POST">
        {{csrf_field()}}
        <div class="row" id="appControllerCasoPrograma">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="clearfix"></div>
                <div class="form-group">
                    <label for=""><h4>Seleccione el programa de formación</h4></label>
                    <select id="programa" class="form-control">
                        <option value="">--Seleccione--</option>
                        <option v-for="programa in programas" v-bind:value="programa.id">@{{programa.nombre}}
                        </option>
                    </select>							   
                </div>
                <div class="form-group competencia">
                        <label for=""><h4>Seleccione la competencia</h4></label>
                        <select id="competen" class="form-control">
                            <option value=''>--Seleccione--</option>
                        </select>
                </div> 
                <div class="form-group resultado">
                    <label for=""><h4>Seleccione los resultados</h4></label><br/>
                    <div class="resultados">
                    </div>
                </div> 
            </div>
            
        </div>
        <div class="row">
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-success">Guardar</button>
                </div>
        </div>
    </form>
    <script type="text/javascript" src="{{asset('js/controller/CasoProgramaController.js')}}"></script>
</div>
@endsection
