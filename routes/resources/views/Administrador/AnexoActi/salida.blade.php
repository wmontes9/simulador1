@extends("layouts.tablas")
@section("content")
 <title>@yield("salida")</title>
<section>
		<div class="div">
		    <div class="caja">Salida de Almacen</tr></div>
		    <div class="minerva3"><br><img src="{{ asset('images/minerva.png') }}" style="width: 80px; height: 30px;">No.<input type="text"></div>
		</div>
	</section>
<br><br>
<table class="table responsive" border="2" style="width: 1000px; margin-left: 100px; margin-top: 80px;">
	   	<tr>	
			<td colspan="3" style="width: 60%;">Recibo de <input type="text"  style="width: 85%;"></td>
			<td>Fecha de Entrada <input type="date"  style="width: 65%;"></td>
		<tr>
		<tr>	
			<td colspan="3">Con destino a <input type="text" style="width: 80%;"></td>
			<td>Orden de comprado No. <input type="text" style="width: 53%;"></td>
		<tr>
		<tr>	
			<td>No. de guía</td>
			<td>Via</td>
			<td>Remisíon No.</td>
			<td>Entrega &nbsp; Total &nbsp;<input type="checkbox"> &nbsp; parcial &nbsp;<input type="checkbox"></td>
		<tr>
</table>
<table class="table responsive" border="2" style="width: 1000px; margin-left: 100px; margin-top:-19px;">
 
 	  <tr class="centro">
 	  	<td style="width: 20%;">Referencia</td>
 	  	<td style="width: 10%;">Cantidad</td>
 	  	<td style="width: 10%;">Unidad</td>
 	  	<td style="width: 40%;">Descripcion del Articulo</td>
 	  	<td style="width: 20%;">Contabilidad</td>
 	  </tr>
 	  <tr>
 	  	<td> <input type="text" style="width: 100%;"></td>
 	  	<td> <input type="text" style="width: 100%;"></td>
 	  	<td> <input type="text" style="width: 100%;"></td>
 	  	<td> <input type="text" style="width: 100%;"></td>
 	  	<td> <input type="text" style="width: 100%;"></td>
 	  </tr>
 	  <tr>
 	  	<td> <input type="text" style="width: 100%;"></td>
 	  	<td> <input type="text" style="width: 100%;"></td>
 	  	<td> <input type="text" style="width: 100%;"></td>
 	  	<td> <input type="text" style="width: 100%;"></td>
 	  	<td> <input type="text" style="width: 100%;"></td>
 	  </tr>
 	
 	<tr>
 	  	<td> <input type="text" style="width: 100%;"></td>
 	  	<td> <input type="text" style="width: 100%;"></td>
 	  	<td> <input type="text" style="width: 100%;"></td>
 	  	<td> <input type="text" style="width: 100%;"></td>
 	  	<td> <input type="text" style="width: 100%;"></td>
 	  </tr>
 	
 	<tr>
 	  	<td> <input type="text" style="width: 100%;"></td>
 	  	<td> <input type="text" style="width: 100%;"></td>
 	  	<td> <input type="text" style="width: 100%;"></td>
 	  	<td> <input type="text" style="width: 100%;"></td>
 	  	<td> <input type="text" style="width: 100%;"></td>
 	  </tr>
 	
 	<tr>
 	  	<td> <input type="text" style="width: 100%;"></td>
 	  	<td> <input type="text" style="width: 100%;"></td>
 	  	<td> <input type="text" style="width: 100%;"></td>
 	  	<td> <input type="text" style="width: 100%;"></td>
 	  	<td> <input type="text" style="width: 100%;"></td>
 	  </tr>
 	
 	<tr>
 	  	<td> <input type="text" style="width: 100%;"></td>
 	  	<td> <input type="text" style="width: 100%;"></td>
 	  	<td> <input type="text" style="width: 100%;"></td>
 	  	<td> <input type="text" style="width: 100%;"></td>
 	  	<td> <input type="text" style="width: 100%;"></td>
 	  </tr>
</table>
<table class="table responsive" border="2" style="width: 1000px; margin-left: 100px; margin-top:-19px;">
	<tr class="centro">
		<td>No. de bultos o cajas <textarea cols="20" rows="3"></textarea></td>
		<td>Recibido por <textarea cols="20" rows="3"></textarea></td>
		<td>Revisao por <textarea cols="20" rows="3"></textarea></td>
		<td>Anotado en kardex <textarea cols="20" rows="3"></textarea></td>
	</tr>
	<tr>
		<td colspan="4">Observaciones: <br> <textarea name="" id="" cols="116" rows="2"></textarea></td>
	</tr>

</table>
<img src="{{ asset('images/barras.png') }}" style="margin-top: -450px; width: 90px; height: 150px;">

<footer>
	<img src="{{ asset('images/pie.png') }}" style="width: 75%; margin-left: 100px;">
</footer>
<script>
  function imprime(){
    document.getElementById("btnImprimir").style.display='none'
    window.print()
    document.getElementById("btnImprimir").style.display='inline'
  }
</script>

   <button type="submit" class="btn btn-primary btn-lg btn-block" onClick="imprime()" id="btnImprimir" name="btnImprimir" >Generar Pdf</button>
@endsection