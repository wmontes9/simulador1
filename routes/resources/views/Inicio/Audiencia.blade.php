@extends("layouts.app_aprendiz")

@section("content")
<div class="col-md-12 text-center">
        <p><h4>Audiencia:  @foreach($caso as $fil) {{$fil->titulo}} @endforeach</h4></p>
        <p>
                @foreach($caso as $fil)
			
				<div class="col-md-12 col-xs-4 border border-success">
                    <p> {{$fil->audiencia}}
                    </p>
				</div>
		@endforeach
        </p>
	</div>
	<hr>
@endsection