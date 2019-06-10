@extends('layouts.app')

@section('content')
<style>
    a.pull-right.btn.btn-default {
    display: none;
}
</style>
<div class="row">
    <div class="container">
        <div class="form-reset">
             @if(Session::has("error"))
                <div class="alert alert-danger"> {{ Session::get("error") }} </div>
             @endif
            @if(Session::has("confirmation"))
            <div class="alert alert-success"><strong>!!alerta!!</strong> {{Session::get("confirmation")}} </div>
            <p class="text-center"><a href="{{url('/')}}" style="text-align: center;">Volver</a></p> 
            @else
            <form action="{{url('u/verificar_correo')}}" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="">Documento</label>
                    <input type="text" class="form-control" name="document" placeholder="Numero de documento" required="required">
                </div>
                <div class="form-group">
                    <label for="">Correo electronico</label>
                    <input type="email" class="form-control" name="email" placeholder="Correo electronico" required="required">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-block">Restablecer</button>
                </div>
                <p class="text-center"><a href="{{url('/')}}">Regresar</a></p>
            </form>
            @endif
            
        </div>
    </div>
</div>
@endsection
