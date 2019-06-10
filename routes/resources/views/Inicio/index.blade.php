@extends("layouts.app")

@section("content")
<div class="container">
    <div class="row text-center" id="appControllerInicio">
        <div class="col-md-4" v-for="caso in casosinicio" style=" margin-right: 10px; background-color: rgba(204, 228, 228, 0.7); border-radius: 10px;">
            <hr/>
                <h4>Caso @{{caso.id}}</h4>
                <h4>@{{caso.titulo}}</h4>
                <img :src="'{{url('/imgcaso')}}/'+caso.url_imagen" class="img-responsive">
                <br/>
                <a class="btn" href="" v-on:click.prevent="getCasoUsuario(caso.id)">+ Más</a>
            
            <!--<div class="col-md-8">
               <textarea style="width:100%;" rows="14">@{{caso.descripcion}}</textarea>
            </div>-->
        </div>
    </div>
</div>
<script type="text/javascript" src="{{asset('js/controller/InicioController.js')}}"></script>
@endsection