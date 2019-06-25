@extends("layouts.app")
@section("content")
    <div class="container">
        <div class="row" id="appControllerActividadUsuario">
            <h3>Competencia</h3>
            <div class="col-md-12" v-for="competen in competencia">
                <span>@{{competen.descripcion}}</span>
                <!-- <iframe width="560" height="315" :src='competen.url_videoc' frameborder="0" allow="autoplay; encrypted-media" allowfullscreen autoplay=1 controls=1 rel=0 showinfo=0 id="video"></iframe>-->
                <iframe width="560" height="315" :src="competen.url_videoc+'?rel&autoplay=1'" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen autoplay=1 controls=1 rel=0 showinfo=0 id="video"></iframe>
                <h4>Actividades</h4>
                <div class="col-md-6" v-for="activid in actividad" v-if="activid.id_compe == competen.id">
                    <textarea style="width:100%;" rows="14">@{{activid.descripcion}}</textarea>
                    <h4>Anexos</h4>
                    <div v-for="anexo in anexo_actividad" v-if="activid.id == anexo.id_actividad">
                        <a :href="anexo.url_anexo">@{{anexo.url_anexo}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="{{asset('js/controller/ActividadusuarioController.js')}}"></script>
@endsection