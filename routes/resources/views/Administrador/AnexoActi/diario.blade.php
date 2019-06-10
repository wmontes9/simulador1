@extends("layouts.tablas")
@section("content")
 <title>@yield("Diario")</title>
<section>
		<div class="div">
		    <div class="caja">Comprobante de Diario</tr></div>
		    <div class="minerva3"><br><img src="{{ asset('images/minerva.png') }}" style="width: 80px; height: 30px;">No.<input type="text"></div>
		</div>
	</section>
<br><br>
	<table class="table responsive" border="2" style="width: 1000px; margin-left: 100px; margin-top: 80px;">
	   	<tr>	
			<td>Fecha <input type="date" style="width: 95%;"></td>	
		<tr>
</table>
		<table class="table responsive" border="2" style="width: 1000px; margin-left: 100px; margin-top: -19px;">
			<tr class="centro">
				<td>Codigo</td>
				<td style="width: 40%;">Cuentas</td>
				<td>Parciales</td>
				<td>Débitos</td>
				<td>Créditos</td>
			</tr>
			<tr class="centro">
				<td><input type="text" style="width: 100%;"></td>
				<td><input type="text" style="width: 100%;"></td>
				<td><input type="text" style="width: 100%;"></td>
				<td><input type="text" style="width: 100%;"></td>
				<td><input type="text" style="width: 100%;"></td>
			</tr>
			<tr class="centro">
				<td><input type="text" style="width: 100%;"></td>
				<td><input type="text" style="width: 100%;"></td>
				<td><input type="text" style="width: 100%;"></td>
				<td><input type="text" style="width: 100%;"></td>
				<td><input type="text" style="width: 100%;"></td>
			</tr>
			<tr class="centro">
				<td><input type="text" style="width: 100%;"></td>
				<td><input type="text" style="width: 100%;"></td>
				<td><input type="text" style="width: 100%;"></td>
				<td><input type="text" style="width: 100%;"></td>
				<td><input type="text" style="width: 100%;"></td>
			</tr>
				<tr class="centro">
				<td><input type="text" style="width: 100%;"></td>
				<td><input type="text" style="width: 100%;"></td>
				<td><input type="text" style="width: 100%;"></td>
				<td><input type="text" style="width: 100%;"></td>
				<td><input type="text" style="width: 100%;"></td>
			</tr>
			<tr class="centro">
				<td><input type="text" style="width: 100%;"></td>
				<td><input type="text" style="width: 100%;"></td>
				<td><input type="text" style="width: 100%;"></td>
				<td><input type="text" style="width: 100%;"></td>
				<td><input type="text" style="width: 100%;"></td>
			</tr>
			<tr class="centro">
				<td><input type="text" style="width: 100%;"></td>
				<td><input type="text" style="width: 100%;"></td>
				<td><input type="text" style="width: 100%;"></td>
				<td><input type="text" style="width: 100%;"></td>
				<td><input type="text" style="width: 100%;"></td>
			</tr>
			<tr class="centro">
				<td><input type="text" style="width: 100%;"></td>
				<td><input type="text" style="width: 100%;"></td>
				<td><input type="text" style="width: 100%;"></td>
				<td><input type="text" style="width: 100%;"></td>
				<td><input type="text" style="width: 100%;"></td>
			</tr>
			<tr class="centro">
				<td><input type="text" style="width: 100%;"></td>
				<td><input type="text" style="width: 100%;"></td>
				<td><input type="text" style="width: 100%;"></td>
				<td><input type="text" style="width: 100%;"></td>
				<td><input type="text" style="width: 100%;"></td>
			</tr>
			<tr class="centro">
				<td><input type="text" style="width: 100%;"></td>
				<td><input type="text" style="width: 100%;"></td>
				<td><input type="text" style="width: 100%;"></td>
				<td><input type="text" style="width: 100%;"></td>
				<td><input type="text" style="width: 100%;"></td>
			</tr>
			<tr class="centro">
				<td><input type="text" style="width: 100%;"></td>
				<td><input type="text" style="width: 100%;"></td>
				<td><input type="text" style="width: 100%;"></td>
				<td><input type="text" style="width: 100%;"></td>
				<td><input type="text" style="width: 100%;"></td>
			</tr>
			<tr>
				<td colspan="3"><p style="float: right;">Sumas iguales</p></td>
				<td>$<input type="text" style="width: 90%;"></td>
				<td>$<input type="text" style="width: 90%;"></td>
			</tr>
	   </table>
	   <table class="table responsive" border="2" style="width: 1000px; margin-left: 100px; margin-top: -19px;">
			<tr class="centro">
				<td rowspan="2">Preparado <textarea name="" id="" cols="18" rows="3"></textarea></td>
				<td rowspan="2">Revisado <textarea name="" id="" cols="18" rows="3"></textarea></td>
				<td rowspan="2">Aprobado <textarea name="" id="" cols="18" rows="3"></textarea></td>
				<td colspan="2">Contabilizado</td>
			</tr>
			
			<tr class="centro">
				<td>Auxiliares <input type="text"></td>
				<td>Diario <input type="text"></td>
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
	    