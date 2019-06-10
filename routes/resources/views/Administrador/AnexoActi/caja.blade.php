
@extends("layouts.tablas")
@section("content")
 <title>@yield("Caja")</title> 
	<section>
		<div class="div">
		    <div class="caja">Recibo de caja</tr></div>
		    <div class="minerva3"><br><img src="{{ asset('images/minerva1.png') }}" style="width: 80px; height: 30px;">No.<input type="text"></div>
		</div>
	</section>
	<div class="container-fluid" style="margin-right: 413px; margin-left: 65px;height: 50px;">

	    <table class="table" border="1">
				<tr>
					<td><p class="letra">Ciudad </p><input type="text" style="width: 75%;  float: right; margin-top: -33px;"></td>
					<td><p class="letra">Fecha <input type="date" style="width: 75%;"></p></td>
					<td><p class="letra">No. </p><input type="text" style="width: 85%; float: right; margin-top: -33px;"></td>
				</tr>

				<tr> 
					<td colspan="3"><p class="letra">Recibido de</p> <input type="text" style="width: 88%; float: right; margin-top: -30px; "></td>
				</tr>
				<tr>
					<td colspan="3"><p class="letra">Direccion </p><input type="text" style="width: 88%; float: right; margin-top: -33px;"></td>
				</tr>

	        <table class="table" border="2" style="margin-top: -19px; width: 842px;">
				<tr>
					<td colspan="3"><p class="verde1"><strong>la suma de(en letras)</strong></p><input type="text" style="width: 83%; float: right; margin-top: -15px;"></td>
					<td>$<input type="text" style="width: 94%; margin-top: 10px;"></td>
				</tr>

				<tr>
					<td colspan="4"><p class="letra">Por concepto de</p><input type="text"style="width: 85%; float: right; margin-top: -30px;"></td>
				</tr>

				<tr>
					<td colspan="4"><input type="text" style="width: 99%;"></td>
				</tr>	

				<tr>
				<td><p class="letra">Cheque No.<input type="text"></td></p>
				<td><p class="letra">Banco <input type="text"></td></p>
				<td><p class="letra">Sucursal<input type="text"></td></p>
				<td><p class="letra">Efectivo <input type="checkbox"></td></p>
			</tr>
	        </table>

	        <table class="table" border="2"  style="margin-top: -19px; width: 842px;">
	    	    <tr>
		    		<td class="cafe borde">Codigo</td>
			    	<td class="cafe">Cuenta</td>
			    	<td class="cafe">Débitos</td>
			    	<td class="cafe">Créditos</td>
			    	<td rowspan="6" class="verde">Firma y Sello <br> <textarea name="" id="" cols="30" rows="4"></textarea><br><hr>
			    	    C.c<input style="margin-top:2px; " type="checkbox" id="check-2g" value="0" data-toggle="checkbox-x" data-size="sm">
						NIT &nbsp;<input style="margin-top:2px; " type="checkbox" id="check-2g" value="0" data-toggle="checkbox-x" data-size="sm">
						No.<input type="text" style="width: 60%;">
					</td>
				</tr>

		        <tr>
				    <td><input type="text" style="width: 100%;"></td>
				    <td><input type="text" style="width: 100%;"></td>
				    <td><input type="text" style="width: 100%;"></td>
				    <td><input type="text" style="width: 100%;"></td>
		        </tr>

		        <tr>
				    <td><input type="text" style="width: 100%;"></td>
				    <td><input type="text" style="width: 100%;"></td>
				    <td><input type="text" style="width: 100%;"></td>
				    <td><input type="text" style="width: 100%;"></td>
		        </tr>

			    <tr>
				    <td><input type="text" style="width: 100%;"></td>
				    <td><input type="text" style="width: 100%;"></td>
				    <td><input type="text" style="width: 100%;"></td>
				    <td><input type="text" style="width: 100%;"></td>
			    </tr>

			    <tr>
				    <td><input type="text" style="width: 100%;"></td>
				    <td><input type="text" style="width: 100%;"></td>
				    <td><input type="text" style="width: 100%;"></td>
				    <td><input type="text" style="width: 100%;"></td>
			    </tr>
			</table>
	    </table>

		<footer>
			<img src="{{ asset('images/pie.png') }}" style="width: 100%;">
		
		<script>
  function imprime(){
    document.getElementById("btnImprimir").style.display='none'
    window.print()
    document.getElementById("btnImprimir").style.display='inline'
  }
</script>

   <button type="submit" class="btn btn-primary btn-lg btn-block" onClick="imprime()" id="btnImprimir" name="btnImprimir" >Generar Pdf</button>
    </div>
</footer>

@endsection