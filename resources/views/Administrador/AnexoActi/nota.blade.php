@extends("layouts.tablas")
@section("content")
 <title>@yield("nota")</title>
	<section>
		    <div class="caja1">NOTA DE <br> CONTABILIDAD No.<input type="text" style="width: 200px; height: 30px;"></tr></div>
	</div>
	</section><br>
	  <div class="detalle">
		DETALLE
		 <p style="float: right;">FECHA &nbsp; <input type="date"></p>
		 <div>
		 	<textarea name="" id="" cols="125" rows="5"></textarea>
		 </div>
	  </div>
	  <table class="table responsive" border="2" style="width: 1000px; margin-left: 100px;">
			<tr>
				<td colspan="5" style="text-align: center;">ACOMPAÑENSE SIEMPRE DOCUMENTO DE PRUEBA</td>
			</tr>
			<tr class="centro">
				<td>CODIGO</td>
				<td style="width: 60%;">CUENTAS</td>
				<td>PARCIALES</td>
				<td>DEBITOS</td>
				<td>CREDITOS</td>
			</tr>
			<tr>
				<td><textarea cols="10" rows="1"></textarea></td> 	
				<td><textarea cols="60" rows="1"></textarea></td>
				<td><textarea cols="10" rows="1"></textarea></td>
				<td><textarea cols="10" rows="1"></textarea></td>
				<td><textarea cols="10" rows="1"></textarea></td>
			<tr>
			<tr>
				<td><textarea cols="10" rows="1"></textarea></td> 	
				<td><textarea cols="60" rows="1"></textarea></td>
				<td><textarea cols="10" rows="1"></textarea></td>
				<td><textarea cols="10" rows="1"></textarea></td>
				<td><textarea cols="10" rows="1"></textarea></td>
			<tr>
			<tr>
				<td><textarea cols="10" rows="1"></textarea></td> 	
				<td><textarea cols="60" rows="1"></textarea></td>
				<td><textarea cols="10" rows="1"></textarea></td>
				<td><textarea cols="10" rows="1"></textarea></td>
				<td><textarea cols="10" rows="1"></textarea></td>
			<tr>
			<tr>
				<td><textarea cols="10" rows="1"></textarea></td> 	
				<td><textarea cols="60" rows="1"></textarea></td>
				<td><textarea cols="10" rows="1"></textarea></td>
				<td><textarea cols="10" rows="1"></textarea></td>
				<td><textarea cols="10" rows="1"></textarea></td>
			<tr>
			<tr>
				<td><textarea cols="10" rows="1"></textarea></td> 	
				<td><textarea cols="60" rows="1"></textarea></td>
				<td><textarea cols="10" rows="1"></textarea></td>
				<td><textarea cols="10" rows="1"></textarea></td>
				<td><textarea cols="10" rows="1"></textarea></td>
			<tr>	
	   </table>
	   <img src=" " alt="">
	   <table class="table responsive" border="2" style="width: 1000px; margin-left: 100px; margin-top: -19px;">
			<tr>
				<td>PREPARADO<textarea cols="25" rows="2"></textarea></td> 	
				<td>REVISADO<textarea cols="25" rows="2"></textarea></td>
				<td>APROBADO<textarea cols="25" rows="2"></textarea></td>
				<td>CONTABILIZADO<textarea cols="25" rows="2"></textarea></td>
			<tr>	
	   </table>
	    <img src="{{ asset('images/barras.png') }}" style="margin-top: -350px; width: 80px; height: 150px;">
	    <footer>
	  <script>
  function imprime(){
    document.getElementById("btnImprimir").style.display='none'
    window.print()
    document.getElementById("btnImprimir").style.display='inline'
  }
</script>

   <button type="submit" class="btn btn-primary btn-lg btn-block" onClick="imprime()" id="btnImprimir" name="btnImprimir" >Generar Pdf</button>
</footer>
	   <p class="verticalText1">Forma adaptada para fecha de 4 digitos (año 2.000)</p>

@endsection