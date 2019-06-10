@extends("layouts.tablas")
@section("content")
 <title>@yield("remision")</title>
<section>
	<div class="grande">
		<div class="div">
		    <div class="egreso">Remisión</tr></div>
		    <div class="minerva"><img src="{{ asset('images/minerva.png') }}" style="width: 60px; height: 20px;">No.<input type="text"></div><br><br><br>
		</div>
    </div>
</section>
    
<table class="table responsive" border="2" style="width: 1000px; margin-left: 100px;">
	   	<tr>
				<td>Señor(es) <input type="text"></td> 	
				<td>Fecha <input type="date"></td>
				<td>Pedido No. <input type="text"></td>		
		<tr>

		<tr>
			<td colspan="2">Direccion <input type="text"></td>
			<td>Ciudad <input type="text"></td>
		</tr>

		<tr>
			<td>Transportador</td>
			<td>Conductor</td>
			<td>Placa Vehiculo</td>
		</tr>
</table>
 <h1 class="ud">Despachamos a Ud.(s) los siguientes artículos:</h1>
 <table class="table responsive" border="2" style="width: 1000px; margin-left: 100px;">
	   	<tr class="centro">
			<td>Referencia</td>
			<td>Cantidad</td>
			<td>Descripcion del Articulo</td>			
		<tr>
			<tr>
				<td><input type="text" style="width: 100%;"></td>
				<td><input type="text" style="width: 100%;"></td>
				<td><input type="text" style="width: 100%;"></td>
			</tr>
			<tr>
				<td><input type="text" style="width: 100%;"></td>
				<td><input type="text" style="width: 100%;"></td>
				<td><input type="text" style="width: 100%;"></td>
			</tr>
			<tr>
				<td><input type="text" style="width: 100%;"></td>
				<td><input type="text" style="width: 100%;"></td>
				<td><input type="text" style="width: 100%;"></td>
			</tr>
			<tr>
				<td><input type="text" style="width: 100%;"></td>
				<td><input type="text" style="width: 100%;"></td>
				<td><input type="text" style="width: 100%;"></td>
			</tr>
			<tr>
				<td><input type="text" style="width: 100%;"></td>
				<td><input type="text" style="width: 100%;"></td>
				<td><input type="text" style="width: 100%;"></td>
			</tr>
			<tr>
				<td><input type="text" style="width: 100%;"></td>
				<td><input type="text" style="width: 100%;"></td>
				<td><input type="text" style="width: 100%;"></td>
			</tr>
</table>
 <table class="table responsive" border="2" style="width: 1000px; margin-left: 100px; margin-top: -19px;">
			<tr class="centro">
				<td rowspan="2">Observaciones:<textarea cols="30" rows="4"></textarea></td>
				<td rowspan="2">Despachado por <textarea cols="15" rows="4"></textarea></td>
				<td rowspan="2">Transportado por <textarea cols="15" rows="4"></textarea></td>
				<td rowspan="2">Recibido por <textarea cols="15" rows="4"></textarea></td>
				<td>Cajas, bultos etc <input type="text"></td>
			</tr>
				<tr class="centro">
				<td>peso total <input type="text"></td>
			</tr>
</table>

<script>
  function imprime(){
    document.getElementById("btnImprimir").style.display='none'
    window.print()
    document.getElementById("btnImprimir").style.display='inline'
  }
</script>

   <button type="submit" class="btn btn-primary btn-lg btn-block" onClick="imprime()" id="btnImprimir" name="btnImprimir" >Generar Pdf</button>
@endsection