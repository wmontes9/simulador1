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
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css') }}">
    <script src="{{asset('js/sweet/jquery.sweet-modal.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('js/sweet/jquery.sweet-modal.min.css')}}">
    <!-- <link rel="stylesheet" href="{{ asset('css/estilos.css')}}"> -->
    <script src="{{asset('/resources/assets/js/main.js')}}"></script>
</head>
<body>
    <div class="fondo">
        <img src="{{url('images/fondo.png')}}" class="img1">
    </div>
    <div id="preloader">
        <div id="animation"></div>
    </div>
        <div class="baner">     
            <img src="{{url('images/Logoproyecto.png')}}" class="img1">
            <img src="{{url('images/LOGOBLANCO.png')}}" class="img2">
            <h1>Simulador de procesos Administrativos <BR>para el Aprendizaje</h1>
            <p>Centro de Gestión Administrativa y Fortalecimiento Empresarial <BR>CEGAFE</p>
        </div>            
        <div id="app">
                @include('layouts.nav') 
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
                        Todos los derechos 2017 SENA - Políticas de privacidad y condiciones uso Portal Web SENA
                    </p>
                    <div class="circulo i2" >
                        <img src="{{url('images/innovem.png')}}" class="imgfo" >
                    </div>
                    
                    <div class="circulo">
                    <img src="{{url('images/LOGOALETHEIA.jpg')}}" class="imgfo" width="80px">
                    </div>
                    <div class="circulo i2" >
                    <img src="{{url('images/sennova.png')}}" class="imgfo">
                    </div>
                </div>
            </footer>
        </div>
</body>
</html>