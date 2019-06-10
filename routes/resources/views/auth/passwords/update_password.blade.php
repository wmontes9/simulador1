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
            @if(Session::has("success"))
            <div class="alert alert-success"><strong>!!alerta!!</strong> {{Session::get("success")}} </div><br>
            <p class="text-center"><a href="{{url('/')}}" style="text-align: center;">Volver</a></p> 
            @else
            <form action="{{url('u/update_password')}}" method="POST" id="form-password">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="">Nueva contraseña</label>
                    <input type="password" class="form-control" name="password" placeholder="Ingrese su contraseña" required="required" id="pass1">
                </div>
                <div class="form-group">
                    <label for="">Repetir contraseña</label>
                    <input type="password" class="form-control"  placeholder="Ingrese su contraseña" required="required" id="pass2">
                </div>
                <div class="form-group">
                    <button id="send" class="btn btn-success btn-block">Actualizar</button>
                </div>
            </form>
            @endif
            
        </div>
    </div>
</div>
<script>
    $(document).on("click","#send",function(){
        var pass1 = $("#pass1").val();
        var pass2 = $("#pass2").val();
        if(pass1 == pass2){
            $("#form-password").submit();
        }else{
            alert("las contraseñas no coinciden");
            return false;
        }
    })
</script>
@endsection
