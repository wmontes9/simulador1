<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SIPAA') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/vue.js')}}"></script>
    <script src="{{asset('js/axios.js')}}"></script>
    <script src="{{asset('js/sweet/jquery.sweet-modal.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('js/sweet/jquery.sweet-modal.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/estilos.css')}}">
    <link rel="stylesheet" href="{{ asset('css/estilos2.css')}}">
    
</head>
<style>
    #menu-bar {
               top: -20px;
                display: block;
               font-size: 30px;
             color: white;
               left: 10px;
               display: block;
               z-index: 200;
}

#label {
    float: right;
    font-size: 28px;
    margin: 6px 0;
    cursor: pointer;
}


.menu {
    position: absolute;
   
    left: 0;
    width: 100%;
    height: 100vh;
   
   
    transition: all 0.5s;
    transform: translateX(-150%);
    cursor: pointer;
    z-index: 200;
   
}
.menu a {
    background-color: #75b330;
    display: block;
    color: #fff;
    font-size: 1.07em;
    height: 50px;
    text-decoration: none;
    padding: 15px;
    border-bottom: 1px solid rgba(255,255,255,0.3);
    width: 100%;
}

.menu a:hover {
    background: rgba(10,90,20,0.9);
    border-bottom: 2px solid rgba(255,255,255,0.3);
}

#menu-bar:checked ~ .menu {
    transform: translateX(0%);
}





@media (min-width:1024px) { 
    #menu-bar{
        display:none;
    }
      .menu {
        position:static;
        width: 100%;
       height: 100px;
        transform: translateX(10%);
        margin: auto;
        display: flex;
    }
    
    .menu a {
        margin: 5px;
        border-radius: 10px; 
        width: auto;
        float: left;
    }
    
   #label { 
        display: none;
 
} 
}
</style>
<body>
    <div class="fondo">
        <img src="{{url('images/fondo.png')}}" class="img1">
    </div>
    <div id="preloader">
        <div id="animation"></div>
    </div>
    <div class="row">
        <div class="container-fluid">
            <div class="baner">
                <img src="{{url('images/Logoproyecto.png')}}" class="img1">
                <img src="{{url('images/LOGOBLANCO.png')}}" class="img2">
                <h1>Simulador de procesos Administrativos <BR>para el Aprendizaje</h1>
                <p>Centro de Gestión Administrativa y Fortalecimiento Empresarial <BR>CEGAFE</p>
            </div>            
            <div id="app">
                @guest
                    <a href="#newUser" class="pull-right btn btn-default" data-toggle="modal" style="margin-top: 20px; margin-right:60px;"> Registrarse</a>
                    <a href="#login" class="pull-right btn btn-default" data-toggle="modal" style="margin-top: 20px; margin-right:60px;"> Iniciar Sesión</a>
                @else
                    <li class="dropdown pull-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    Salir
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endguest
                    <input type="checkbox" id="menu-bar" class="glyphicon glyphicon-align-justify">
                    <label class="fontawesome-align-justify " for="menu-bar" id="label" ></label>
                    <nav class="menu">
                        <ul>
                        <a class="fa fa-home"  href="{{url('aprendiz')}}" > Inicio </a>  
                        <a href="{{url('descripcion')}}" class="fa fa-sort"> Descripción</a>
                        <a href="{{url('audiencia')}}" class=" fa fa-group "> Audiencia</a>
                        <!--<a href="{{url('administrador/anexo')}}" class="fa fa-file-text-o"> Anexos</a>
                        <a href="{{url('administrador/actividad')}}" class="fa fa-briefcase"> Actividades</a>
                        <a href="{{url('administrador/evaluacion')}}" class="fa fa-forward"> Evaluación</a>-->
                        <!--<a href="contactenos.html">Salir</a>-->
                    </nav>
            </div>
            <main class="py-4">
                @yield('content') 
                <div id="app-login">
                    @include("/auth.login")
                </div>
                <div id="app-register">
                    @include("/auth.register")
                </div>
            </main>
            <script src="{{asset('js/components/login.js')}}"></script>
            <script src="{{asset('js/components/register.js')}}"></script>
            <footer>
                <div class="footer">
                    <p>Servicio Nacional de Aprendizaje SENA - Dirección General <br>
                    Calle 57 No. 8 - 69 Bogotá D.C. (Cundinamarca), Colombia<br>
                    Conmutador Nacional (57 1) 5461500 - Extensiones<br>
                    Atención presencial: lunes a viernes 8:00 a.m. a 5:30 p.m. - Resto del país sedes y horarios<br>
                    Atención al ciudadano: Bogotá (57 1) 5925555 - Línea gratuita y resto del país 018000 910270<br>
                    Correo servicio al cliente: gpservicioalcliente@sena.edu.co<br>
                    Todos los derechos 2017 SENA - Políticas de privacidad y condiciones uso Portal Web SENA</p>
                <div class="circulo i2" >
                    <img src="{{url('images/innovem.png')}}" class="imgfo" >
                </div>
                    <div class="circulo">
                    <img src="{{url('images/LOGOALETHEIA.jpg')}}" class="imgfo" width="80px">
                    </div>
                    <div class="circulo i2" >
                    <img src="{{url('images/sennova.png')}}" class="imgfo" >
                    </div>
                </div>
            </footer>
        </div>
    </div>    
</body>
</html>
