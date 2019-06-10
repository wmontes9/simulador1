	@extends("layouts.tablas")
    @section("content")
     <title>@yield("CajaMenor")</title>
    <section> 
	<div class="container-fluid">
		<div >
			<img class="minerva2" src="{{ asset('images/minerva2.png') }}" alt="">
		</div>
	</div>
</section>
<div class="container-fluid " style="margin-right: 413px; margin-left: 65px;height: 50px; margin-top: 5PX;">
	     <table class="table" border="2">
		
			<tr>
				<td><p class="letra">Ciudad <input type="text" style="width: 80%;"></p></td>
				<td><p class="letra"><input type="date" style="width: 100%;"></p></td>
				<td><p class="letra1"><strong>No.</strong><input type="text" style="width: 89%;"></p></td>
			</tr>
			<tr>
				<td colspan="2"><p class="letra">Pagado a &nbsp;<input type="text" style="width: 85%;"></p></td> 
				<td class="verde">$ &nbsp; &nbsp;<input type="text" style="width: 88%;"></td>
			</tr>
			
			
			
	    <table class="table" border="2" style="margin-top: -19px; width: 842px;">
			<tr>
				<td colspan="4" class="letra1">Concepto &nbsp;<input type="text"style="width: 99%;"></td>
			</tr>
			<tr>
				<td colspan="4"><input type="text"style="width: 99%;"</td>
			</tr>
			<tr>
				<td colspan="4"><input type="text"style="width: 99%;"</td>
			</tr>
			
	    </table>

	     <table class="table" border="2" style="margin-top: -19px; width: 842px;">
			<tr>
				<td colspan="4" class="letra1">Valor(en letras)&nbsp;<input type="text"style="width: 99%;"></td>
			</tr>
			<tr>
				<td colspan="4"><input type="text"style="width: 99%;"</td>
			</tr>
			

	    </table>
	    <table class="table" border="2" style="margin-top: -19px; width: 842px;">
	    	<tr>
	    		<td colspan="3" class="letra">Código</td>
		    	<td rowspan="6" class="verde">Firma de recibido
		    		<br> <textarea name="" id="" cols="102" rows="3"></textarea><br> <br>
		    	    C.c<input style="margin-top:2px; " type="checkbox" id="check-2g" value="0" data-toggle="checkbox-x" data-size="sm">
					NIT &nbsp;<input style="margin-top:2px; " type="checkbox" id="check-2g" value="0" data-toggle="checkbox-x" data-size="sm">
					No.<input type="text" style="width: 80%;">
				</td>
		    </tr>
		    <tr>
		    	<td colspan="3" class="verde">Aprobado</td>
		    </tr>
	    </table>
	      <footer>
	<img src="{{ asset('images/pie.png') }}"  style="width: 100%;">
		   <script>
  function imprime(){
    document.getElementById("btnImprimir").style.display='none'
    window.print()
    document.getElementById("btnImprimir").style.display='inline'
  }
</script>
   <button type="submit" class="btn btn-primary btn-lg btn-block" onClick="imprime()" id="btnImprimir" name="btnImprimir" >Generar Pdf</button>
</footer>
	</div>
</table>
@endsection