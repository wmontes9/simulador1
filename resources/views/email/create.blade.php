<form action="{{route('enviarmail.store')}}" method="POST">
	{{csrf_field()}}
	<label>Nombre:</label>
	<input type="text" name="nombre">
	<input type="submit">
</form>