@extends("layouts.app_aprendiz")

@section("content")
<div class="container">
        <div class="col-md-12 text-center">
                <p><h4>Descripcion:  @foreach($caso as $fil) {{$fil->titulo}} @endforeach</h4></p>
                <p style="text-align: justify;">
                        @foreach($caso as $fil)
                        <textarea style="width:100%;" rows="14">{{$fil->descripcion}}</textarea>
                        @endforeach
                </p>
        </div>
</div>
@endsection
    