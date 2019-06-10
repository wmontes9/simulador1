	@extends("layouts.tablas")
    @section("content")
     <title>@yield("ingreso")</title>
<section>
	<div class="div">
		<textarea class="tarea" name="" id="" cols="60" rows="1"></textarea><br>
		    <div class="egreso">Comprobante de Ingreso</tr></div>
		    <div class="minerva"><img src="{{ asset('images/minerva.png') }}" style="width: 60px; height: 20px;">No.<input type="text"></div>
		</div>
</section>
<div class="container-fluid " style="margin-right: 413px; margin-left: 65px;height: 50px;">
	     <table class="table" border="2">
		
			<tr>
				<td><p class="letra">Ciudad <input type="text" style="width: 82%;"></p></td>
				<td><p class="letra">Fecha <input type="date" style="width: 82%;"></p></td>
				<td><p class="letra">No. <input type="text" style="width: 89%;"></p></td>
			</tr>
			<tr>
				<td><p class="letra">Recibido de</p></td>
				<td><input type="text" style="width: 100%;"></td>
				<td class="verde">$. &nbsp; &nbsp;<input type="text" style="width: 88%;"></td>
			</tr>
			<tr>
				<td colspan="3"><p class="letra">Direccion <input type="text" style="width: 92%;"></p></td>
			</tr>
			
			
	    <table class="table" border="2" style="margin-top: -19px; width: 842px;">
			<tr>
				<td colspan="4"><p class="verde1"><strong>La suma de(en letras)</strong></p>&emsp; &emsp; &emsp; &emsp; &emsp; PESOS <input type="text"style="width: 82%;"></td>
			</tr>
			<tr>
				<td colspan="4"><p class="letra">Por concepto de &nbsp;<input type="text"style="width: 86%;"></p></td>
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
	    <table class="table" border="2" style="margin-top: -19px; width: 842px;">
	    	<tr>
	    		<td class="cafe borde">Codigo P.U.C</td>
		    	<td class="cafe">Cuenta</td>
		    	<td class="cafe">Débitos</td>
		    	<td class="cafe">Créditos</td>
		    	<td rowspan="6" class="verde">Firma y Sello <br> <textarea name="" id="" cols="40" rows="4"></textarea><br>
		    	    C.c<input style="margin-top:2px; " type="checkbox" id="check-2g" value="0" data-toggle="checkbox-x" data-size="sm">
					NIT &nbsp;<input style="margin-top:2px; " type="checkbox" id="check-2g" value="0" data-toggle="checkbox-x" data-size="sm">
					No.<input type="text" style="width: 60%;"><hr>
					<div class="cafe1">Fecha de Recibido:</div><input type="date" style="margin-top: -30px; float: right; width: 65%; color: #cdaa6a"><hr>
					Normas $0984 y 0989 Nuevo Codigo de Comercio
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
<footer>
	<img src="{{ asset('images/pie.png') }}" style="width: 100%;">
	<button type="submit" class="btn btn-primary btn-lg btn-block" onClick="imprime()" id="btnImprimir" name="btnImprimir" >Generar Pdf</button>
</footer>
	</div>
</table>
<script>
  function imprime(){
    document.getElementById("btnImprimir").style.display='none'
    window.print()
    document.getElementById("btnImprimir").style.display='inline'
  }
</script>
   
@endsection