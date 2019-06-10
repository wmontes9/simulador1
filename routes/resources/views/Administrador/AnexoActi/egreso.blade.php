@extends("layouts.tablas")
   @section("content")
    <title>@yield("egreso")</title>
	<section>
	<div class="grande">
	    <div class="tex"><img class="imagenes" src="{{ asset('images/Captura.PNG') }}" alt=""></div>
		<textarea name="" id="" cols="117" rows="10" class="tex1" placeholder=""></textarea>
		<h1 class="trama">Trama de seguridad para duplicar el cheque</h1>
		<div>
		    <div class="egreso">Comprobante de Egreso</tr></div>
		    <div class="minerva"><img src="{{ asset('images/minerva.png') }}" style="width: 60px; height: 20px;">No.<input type="text"></div>
		</div>
	    <img class="imagenes1" src="{{ asset('images/barras.png') }}" style="height: 100px; width: 90px;">
	</div>
	</section>
	<div class="container-fluid " style="margin-right: 750px; margin-left: 60px;height: 50px;">
	     <table class="table" border="2">
			<tr>
				<th style="color: #FFFFFF; background-color: #DD6800; width: 40px; text-align: center;">Código P.U.C</th>
				<th style="color: #FFFFFF; background-color: #DD6800; text-align: center;">Concepto</th>
				<th style="color: #FFFFFF; background-color: #DD6800; text-align: center;">Valor</th>
			</tr>
			<tr>
				<td><textarea name="" id="" cols="14" rows="1"></textarea></td>
				<td><textarea name="" id="" cols="73" rows="1"></textarea></td>
				<td><textarea name="" id="" cols="14" rows="1"></textarea></td>
			</tr>
			<tr>
				<td><textarea name="" id="" cols="14" rows="1"></textarea></td>
				<td><textarea name="" id="" cols="73" rows="1"></textarea></td>
				<td><textarea name="" id="" cols="14" rows="1"></textarea></td>
			</tr>
			<tr>
				<td><textarea name="" id="" cols="14" rows="1"></textarea></td>
				<td><textarea name="" id="" cols="73" rows="1"></textarea></td>
				<td><textarea name="" id="" cols="14" rows="1"></textarea></td>
			</tr>
			<tr>
				<td><textarea name="" id="" cols="14" rows="1"></textarea></td>
				<td><textarea name="" id="" cols="73" rows="1"></textarea></td>
				<td><textarea name="" id="" cols="14" rows="1"></textarea></td>
			</tr>
			<tr>
				<td><textarea name="" id="" cols="14" rows="1"></textarea></td>
				<td><textarea name="" id="" cols="73" rows="1"></textarea></td>
				<td><textarea name="" id="" cols="14" rows="1"></textarea></td>
			</tr>
			<tr>
				<td colspan="2" class="text-center">Observaciones &nbsp; <textarea name="" id="" cols="35" rows="1"></textarea>&nbsp; Valor Neto$</td>
				<td><textarea name="" id="" cols="14" rows="1"></textarea></td>
			</tr>
		</table>
	    <table class="table" border="2" style="margin-top: -19px; width: 700px;">
			<tr>
				<th colspan="2" class="verde">Cheque &nbsp;<textarea name="" id="" cols="20" rows="1"></textarea></th>
				<th class="verde" >Efectivo</th>
				<th><textarea name="" id="" cols="11" rows="1"></textarea></th>
				<th rowspan="5" colspan="2" class="verde">
					Firma y sello del beneficiario:<textarea name="" id="" cols="30" rows="6"></textarea>
					C.c &nbsp;<input style="margin-top:2px; " type="checkbox" id="check-2g" value="0" data-toggle="checkbox-x" data-size="sm">
					NIT &nbsp;<input style="margin-top:2px; " type="checkbox" id="check-2g" value="0" data-toggle="checkbox-x" data-size="sm">
					No.<textarea name="" id="" cols="14" rows="1"></textarea>
					<hr>
					<div class="fecha">Fecha de Recibido:</div><input type="date" style="margin-top: -30px; float: right;">
				 </th>
			</tr>
			<tr>
				<th>No.</th>
				<th>Sucursal</th>
				<th colspan="2"><textarea name="" id="" cols="22" rows="1"></textarea></th>
			</tr>
			<tr>
				<th colspan="4">Banco</th>
			</tr>
			<tr>
				<th colspan="4"></th>
			</tr>
			<tr>
				<th class="verde">Elaboro <textarea name="" id="" cols="12" rows="3"></textarea></th>
				<th class="verde">Revisado <textarea name="" id="" cols="12" rows="3"></textarea></th>
				<th class="verde">Aprobado <textarea name="" id="" cols="12" rows="3"></textarea></th>
				<th class="verde">Contabilizado <textarea name="" id="" cols="12" rows="3"></textarea></th>
			</tr>

	    </table>
<footer>
	<button type="submit" class="btn btn-primary btn-lg btn-block" onClick="imprime()" id="btnImprimir" name="btnImprimir" style="width: 160%">Generar Pdf</button>
	<script>
	  function imprime(){
	    document.getElementById("btnImprimir").style.display='none'
	    window.print()
	    document.getElementById("btnImprimir").style.display='inline'
	  }
	</script>
</footer>		
    <div class="verticalText2">
			<p>Legis. Prohibida toda reproducción total o parcial, sin la que expresa autorización escrita de LEGIS, bajo cualquier medio conocido o por conocer, sin permiso de las sanciones civiles y establecidas en la ley autoral.</p>
</div
@endsection


