@extends("layouts.tablas")
@section("content")
 <title>@yield("Debito")</title>
	<section>
		    <div class="caja1">NOTA DEBITO No.<input type="text" style="width: 200px; height: 30px;"></tr></div>
	</div>
	</section><br>
	<table class="table responsive" border="2" style="width: 1000px; margin-left: 100px;">
			<tr>
				<td>SEÑOR(ES) <input type="text"></td> 	
				<td>NIT. <input type="text"></td>
				<td>FECHA <input type="date"></td>
			<tr>

			<tr>
				<td colspan="2">DIRECCION <input type="text"></td> 	
				<td>CUENTA <input type="text"></td>
			<tr>
	</table>
	<table class="table responsive" border="2" style="width: 1000px; margin-left: 100px; margin-top: -19px;">
			<tr class="centro">
				<td colspan="2">LE(S) ROGAMOS TOMAR NOTA DE LOS SIGUIENTES ABONOS HECHOS A SU APRECIABLE CUENTA:</td> 
			<tr>	

			<tr class="centro">
				<td>CONCEPTO</td>
				<td>VALOR</td>
			</tr>

			<tr>
				<td><textarea name="" id="" cols="100" rows="10"></textarea></td>
				<td><textarea name="" id="" cols="20" rows="10"></textarea></td>
			</tr>

			<tr>
				<td>VALOR (en letras) <input type="text">TOTAL</td>
				<td>$ <input type="text"></td>
			</tr>
	   </table>
	   <table class="table responsive" border="2" style="width: 1000px; margin-left: 100px; margin-top: -19px;">
			
			<tr>
				<td>CODIGO</td>
				<td>DEBITOS</td>
				<td rowspan="4">ELABORADA <textarea name="" id="" cols="15" rows="5"></textarea></td>
				<td rowspan="4">REVISADA <textarea name="" id="" cols="15" rows="5"></textarea></td>
				<td rowspan="4">AUTORIZADA <textarea name="" id="" cols="15" rows="5"></textarea></td>
				<td rowspan="4">CONTABILIZADA <textarea name="" id="" cols="15" rows="5"></textarea></td>
			</tr>
				<tr>
					<td><input type="text"></td>
					<td><input type="text"></td>
				</tr>
				<tr>
					<td><input type="text"></td>
					<td><input type="text"></td>
				</tr>
				<tr>
					<td><input type="text"></td>
					<td><input type="text"></td>
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