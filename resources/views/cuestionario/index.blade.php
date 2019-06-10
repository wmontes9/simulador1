@extends("layouts.app_aprendiz")
@section("content")
    <div class="container">
        <form action="{{route('cuestionarioUsuario.store')}}" method="post">
        {{csrf_field()}}
        <div class="row" id="appControllerCuestionarioUsuario">
            <h4>Cuestionario de conocimientos previos</h4>
            <div class="col-md-12" v-for="cuestionario in cuestionarios">
                <span>@{{cuestionario.titulo}}</span>
                <span>@{{cuestionario.descripcion}}</span>
            </div>
            <br/>
            <ol type="1">
                <div class="col-md-12" v-for="pregunta in preguntas">
                    <br/>
                    <li>
                    <span><b>¿@{{pregunta.descripcion}}?</b></span>
                    </li>
                    <ol type="a">
                        <div class="col-md-6" v-for="respuesta in respuestas" v-if="respuesta.id_pregunta == pregunta.id">
                            <li>
                                <input type="radio" :name="'preg'+pregunta.id" class="textfield" :value="respuesta.validacion" tabindex="4">
                                <span>@{{respuesta.descripcion}}</span>
                            </li>
                        </div>
                    </ol>
                </div>
            </ol>
        </div>
        <div class="form-group text-center">
                <button type="submit" class="btn btn-success"> Enviar - ></button>
            </div>
        </form>
    </div>
    <script type="text/javascript" src="{{asset('js/controller/cuestionariousuarioController.js')}}"></script>
@endsection