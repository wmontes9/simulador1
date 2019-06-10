@extends("layouts.tablas")
@section("content")
 <title>@yield("Formulario")</title>

<div class="container-fluid">
 <form id="form" name="form"   method="POST" onsubmit="return validar()">
  {{ csrf_field() }}

  <table class="table table-bordered table-condensed table-responsive" id="myTable"> 

    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
 
    <tr>
    	<td rowspan="2" colspan="2" width="25%"></td>
    	<th rowspan="2" width="50%" class="text-center"><br>HOJA DE VIDA EQUIPOS DE CÓMPUTO</th>
      <th class="text-center" width="12%" colspan="2" style="background-color: #F3F3F3">FECHA:</th>
      <td colspan="3"><input name="fecha" type="date" style="width: 100%" /></td>
    </tr>

    <tr>
    	<th width="12%" colspan="2" style="background-color: #F3F3F3">RESPONSABLE TIC:</th>
    	<td colspan="3"><input name="tic" type="text" style="width: 100%" /></td>
    </tr>

    <td colspan="8"></td><br>
    <tr>
    	<th colspan="8" class="text-center" style="background-color: #D9D9D9">1. DATOS USUARIO</th>
    </tr>

    <tr>
      <td style="background-color: #F3F3F3">Dependencia:<td colspan="7"><input id="dependencia" type="text" name="dependencia" style="width: 100%" >
       </td></td>
    </tr>

    <tr>
      <td style="background-color: #F3F3F3">Responsable Equipo:<td colspan="7"><input type="text" name="equipo" style="width: 100%" ></td></td>
    </tr>
    
    <tr>
      <th colspan="8" class="text-center" style="background-color: #D9D9D9">2. INFORMACION DEL PROVEEDOR</th>
    </tr>

    <tr>
      <td style="background-color: #F3F3F3">Entidad/Proveedor:<td colspan="7"><input type="text" name="entidad" style="width: 100%" >
      </td></td>
    </tr>

    <tr>
      <td style="background-color: #F3F3F3">Tiempo de garantía:<td colspan="7"><input type="text" name="tiempo" style="width: 100%" >

      </td></td>
    </tr>

    <tr>
      <th colspan="8" class="text-center" style="background-color: #D9D9D9">3. INFORMACION DEL EQUIPO</th>
    </tr>

    <tr>
      <td style="background-color: #F3F3F3">Codigo Pc:<td colspan="7"><input type="text" name="pc" style="width: 100%" >

      </td></td>
    </tr>

    <tr>
      <td style="background-color: #F3F3F3">Codigo Monitor:<td colspan="7"><input type="text" name="monitor" style="width: 100%" >
      </td></td>
    </tr>
    
    <tr>
      <td style="background-color: #F3F3F3">Serial Teclado:</td>
      <td colspan="2"><input type="text" name="teclado" style="width: 100%" >
   
      </td>
      <th class="text-center" colspan="2" style="background-color: #F3F3F3">Marca y/o modelo Teclado:</th>
      <td width="35%" colspan="3"><input name="marcateclado" type="text" style="width: 100%">

      </td>
    </tr><br>

     <tr>
      <td style="background-color: #F3F3F3">Serial Mouse:</td>
      <td colspan="2" ><input type="text" name="mouse" style="width: 100%" >

      </td>
      <th class="text-center" colspan="2" style="background-color: #F3F3F3">Marca y/o modelo Mouse</th>
      <td width="35%" colspan="3"><input name="marcamouse" type="text" style="width: 100%" >

      </td>
    </tr><br>

    <tr>
      <td style="background-color: #F3F3F3">Serial CPU<td colspan="7"><input type="text" name="cpu" style="width: 100%">
 
      </td></td>
    </tr>

    <tr>
      <td style="background-color: #F3F3F3">Procesador<td colspan="7"><input type="text" name="procesador" style="width: 100%" >
      </td></td>
    </tr>

    <tr>
      <td style="background-color: #F3F3F3">Memoria RAM<td colspan="7"><input type="text" name="ram" style="width: 100%">

      </td></td>
    </tr>

    <tr >
      <td rowspan="2" width="25%" style="background-color: #F3F3F3">Disco Duro</td>
      
      <td class="text-center" width="12%" colspan="2" style="background-color: #F3F3F3">Marca</td>
      <td class="text-center" colspan="2" style="background-color: #F3F3F3">Capacidad</td>
      <td colspan="2" style="background-color: #F3F3F3"></td>
      <td></td>
    </tr>
    <tr>
      <td width="12%" colspan="2" ><input name="capacidad" type="text" style="width: 100%">

      </td>
      <td colspan="2"><input name="marca" type="text" style="width: 100%">

      </td>
      <td class="text-center" colspan="2" style="background-color: #F3F3F3">Otro</td>
      <td><input type="text" name="otro" >

      </td>
    </tr>

     <tr>
      <th colspan="8" class="text-center" style="background-color: #D9D9D9">4. SISTEMA OPERATIVO INSTALADO</th>
    </tr>

    <tr>
      <td style="background-color: #F3F3F3">Nombre del Sistema Operativo:</td>
      <td><input type="text" name="sisoperativo">

      </td>
      <td style="background-color: #F3F3F3">Licenciado</td>


    <td>

    <input type="radio" name="title" id="r1" value="Si" ><label for="r1">Si. </label>
    </td>

    <td>
      <input type="radio" name="title" id="r2" value="No"><label for="r2">No</label>
    </td>

    <td style="background-color: #F3F3F3" >Gratuito</td>

    <td>
    <input type="radio" name="title" id="r1" value="Si" ><label for="r1">Si. </label>
    </td>

    <td>
      <input type="radio" name="title" id="r2" value="No"><label for="r2">No</label>
    </tr>

    <tr>
      <td style="background-color: #F3F3F3">Versión<td colspan="7"><input type="text" name="version" style="width: 100%">
      </td></td>
    </tr>

    <td colspan="8"></td>

    <tr>
      <th colspan="8" class="text-center" style="background-color: #D9D9D9">5. PROGRAMAS INSTALADOS</th>
    </tr>

    <tr>
      <td colspan="3" class="text-center" style="background-color: #F3F3F3">Licenciados</td>
      <td colspan="5" class="text-center" style="background-color: #F3F3F3">Gratuitos</td>
    </tr>

    <tr>
      <td colspan="3"><input type="text" name="campo" style="width: 100%"></td>
      <td colspan="5"><input type="text" name="campo" style="width: 100%"></td>
    </tr>
    <tr>
      <td colspan="3"><input type="text" name="campo" style="width: 100%"></td>
      <td colspan="5"><input type="text" name="campo" style="width: 100%"></td>
    </tr>
    <tr>
      <td colspan="3"><input type="text" name="campo" style="width: 100%"></td>
      <td colspan="5"><input type="text" name="campo" style="width: 100%"></td>
    </tr>
    <tr>
      <td colspan="3"><input type="text" name="campo" style="width: 100%"></td>
      <td colspan="5"><input type="text" name="campo" style="width: 100%"></td>
    </tr>
    <tr>
      <td colspan="3"><input type="text" name="campo" style="width: 100%"></td>
      <td colspan="5"><input type="text" name="campo" style="width: 100%"></td>
    </tr>
    <tr>
      <td colspan="3"><input type="text" name="campo" style="width: 100%"></td>
      <td colspan="5"><input type="text" name="campo" style="width: 100%"></td>
    </tr>

    <tr>
      <th colspan="8" class="text-center" style="background-color: #D9D9D9">6. MANTENIMIENTOS PREVENTIVOS</th>
    </tr>
    <tr>
      <td colspan="8" class="text-center">Mantenimiento</td>
    </tr>

    <tr>
      <td style="background-color: #F3F3F3">Fecha Realización:</td>
      <td colspan="2"><input type="text" name="fecharealizacion" style="width: 100%" >

      </td>
      <td style="background-color: #F3F3F3" >Realizó</td>
      <td ><input type="text" name="realizo">

      </td>
      <td style="background-color: #F3F3F3" colspan="3" class="text-center">Aceptación Empresa</td>
    </tr>

    <tr>
      <td colspan="5" class="text-center" style="background-color: #F3F3F3">Observaciones</td>
      <td class="text-center" colspan="3"><textarea name="firma" id="" cols="30" rows="2" ></textarea>
        <br>Firma</td>
    </tr>

    <tr>
      <td colspan="5"><textarea name="observaciones" id="" cols="130" rows="3"></textarea>

      @if($errors->has('observaciones'))
        {{ $errors->first('observaciones')}}

      @endif

      </td>
      <td colspan="3">Nombre: <input type="text" style="width: 100%" name="nombre">

      </td>
    </tr><br>

    <tr>
      <td colspan="8" class="text-center">Mantenimiento</td>
    </tr>

    <tr>
      <td style="background-color: #F3F3F3">Fecha Realización:</td>
      <td colspan="2"><input type="text" name="fecharealizacion" style="width: 100%">

      </td>
      <td style="background-color: #F3F3F3">Realizó</td>
      <td ><input type="text" name="realizo" style="width: 100%">
      </td>
      <td style="background-color: #F3F3F3" colspan="3" class="text-center">Aceptación Empresa</td>
    </tr>

    <tr>
      <td colspan="5" class="text-center" style="background-color: #F3F3F3">Observaciones</td>
      <td class="text-center" colspan="3"><textarea name="firma" id="" cols="30" rows="2"></textarea>
      <br>Firma</td>
    </tr>

    <tr>
      <td colspan="5"><textarea name="observaciones" id="" cols="130" rows="3"></textarea>

      </td>
      <td colspan="3">Nombre: <input type="text" name="nombre" style="width: 100%">
      </td>
    </tr><br>


   
    <tr>
      <td colspan="8" class="text-center">Mantenimiento</td>
    </tr>

    
    <tr>
      <td style="background-color: #F3F3F3">Fecha Realización:</td>
      <td colspan="2"><input type="text" name="fecharealizacion" style="width: 100%" >

      </td>
      <td style="background-color: #F3F3F3">Realizó</td>
      <td ><input type="text" name="realizo" style="width: 100%" >

      </td>
      <td colspan="3" class="text-center" style="background-color: #F3F3F3">Aceptación Empresa</td>
    </tr>

    <tr>
      <td colspan="5" class="text-center" style="background-color: #F3F3F3">Observaciones</td>
      <td class="text-center" colspan="3"><textarea name="firma" id="" cols="30" rows="2"></textarea>

        <br>Firma</td>
    </tr>

    <tr>
      <td colspan="5"><textarea name="observaciones" id="" cols="130" rows="3" ></textarea>

      </td>
      <td colspan="3">Nombre: <input type="text" name="nombre" style="width: 100%" >

      </td>
    </tr><br>

    <tr>
      <th colspan="8" class="text-center" style="background-color: #D9D9D9">7. RECOMENDACIONES Y/O OBSERVACIONES</th>
    </tr>

    <tr>
      <td colspan="8" width="100%"><textarea name="recomendaciones" id="" cols="180" rows="5" ></textarea>
      </td>
    </tr>

 </div>
  </table>
  </div>
  <button onclick="myCreateFunction()">Crear</button>
<button onclick="myDeleteFunction()">Borrar</button>


<script>
  function imprime(){
    document.getElementById("btnImprimir").style.display='none'
    window.print()
    document.getElementById("btnImprimir").style.display='inline'
  }
</script>

   <button type="submit" class="btn btn-primary btn-lg btn-block" onClick="imprime()" id="btnImprimir" name="btnImprimir" >Generar Pdf</button>

 </form> 
</div>
</body>
@endsection



