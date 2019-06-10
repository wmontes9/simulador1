@extends("layouts.app_aprendiz")

@section("content")
<div class="row" id="appControllerAprendiz">
    <div class="container">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-6" v-for="caso in casosinicio">
                    <h4><b>@{{caso.titulo}}</b></h4> 
                    <iframe width="400px" height="300" :src="caso.url_video+'?rel&autoplay=1'" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen autoplay=1 controls=1 rel=0 showinfo=0 id="video"></iframe>
                </div>
                <div v-for="resultado in resultados">
                    <div class="col-md-6 text-center" v-for="competencia in competencias" v-if="resultado.id_competencia == competencia.id_competen">
                        <h4> @{{competencia.descripcion_competencia}}</h4>
                        <a class="btn" href="" v-on:click.prevent="getCuestionario(competencia.id_competen)">+ Más</a>
                        <br/>
                        <span v-if="resultado.id_competencia == competencia.id_competen">@{{resultado.descripcion_resultado}}</span>                    
                    </div>
                </div>
            </div>

    <!--<output for='range_control' class='tempe'>tem °C</output>
    <input type='range' list='tickmarks' min='0' max='100' class='temp' value="60" step='1' disabled/>
    <datalist id='tickmarks'>
    <option value='0'>
    <option value='10'>
    <option value='20'>
    <option value='30'>
    <option value='40'>
    <option value='50'>
    <option value='60'>
    <option value='70'>
    <option value='80'>
    <option value='90'>
    <option value='100'>
    </datalist>-->
        </div>
    </div>
</div>
<script type="text/javascript" src="{{asset('js/controller/AprendizController.js')}}"></script>
        
@endsection
    