$(document).ready(function(){
	$("#programa").change(function(){
		var programa = $("#programa option:selected").val();
		$('#competen').children('option:not(:first)').remove();
		$(".resultados").text("");
		$(".resultado").slideUp();
		$(".competencia").slideDown();
		competencias(programa);
	});
	$("#competen").change(function(){
		var competencia = $("#competen option:selected").val();
		$(".resultados").text("");
		//alert(competencia);
		$(".resultados, .resultado").slideDown();
		//$('#competen').children('option:not(:first)').remove();
		resultados(competencia);
	});
	/*$("input:checkbox:checked").each(function() {
		alert($(this).val());
   	});
   	$('#formid input[type=checkbox]').each(function(){
		if (this.checked) {
			selected += $(this).val()+', ';
		}
	}); */

});
$(document).on("change",".check",function(){
	if(this.checked) 
      {
		var tipo = $(this).val();
		$("#tipo"+tipo).slideDown();
	  }else{
		var tipo = $(this).val();
		$("#tipo"+tipo).slideUp();
	  }
});
function competencias(idPrograma){
	$.ajax({
		"url":"../competencia/getCompetencia/"+idPrograma,
		"method":"GET"
	}).done(function(request){
		for( var i = 0; i < request.length; i++ ) {
			$("#competen").append("<option value="+request[i].id+">"+request[i].descripcion+"</option>");
		}
	});
}
function resultados(idCompetencia){
	$.ajax({
		"url":"../getResultado/"+idCompetencia,
		"method":"GET"
	}).done(function(request){
		//alert(request[0][0].descripcion);
		for( var i = 0; i < request[0].length; i++ ) {
			var indice = i+1;
			$(".resultados").append("<div class='col-md-6 resultado"+i+"'><div class='col-md-6'><input type='checkbox' class='check check"+indice+"' name='resultado[]' value='"+request[0][i].id+"'/>"+request[0][i].descripcion+'</div></div>');
			$(".resultado"+i).append("<div class='col-md-6'><label for=''>Tipo resultado</label><select class='form-control tipo' name='tipo-result[]' style='display:none' id='tipo"+indice+"'><option value='0'>--Seleccionar--</option></select></div>");
		}
		$.ajax({
			'url':'../getTipoResultado',
			'method':'GET'
		}).done(function(reques){
			for( var ji = 0; ji < i; ji++ ) {
				var tip=ji+1;
				for( var k = 0; k < reques.length; k++ ) {
					$("#tipo"+tip).append("<option value='"+reques[k].id+"'>"+ reques[k].tipo_resultado+"</option>");
				}
			}
		});
		for( var j = 0; j < request[1].length; j++){
			$('.check'+request[1][j].id_resultado).attr('checked', true);
		}
	});
}
$(document).on("change","#programauser",function(){
	var programa = $("#programauser option:selected").val();
	$.ajax({
		"url":"getFichas/"+programa,
		"method":"GET"
	}).done(function(request){
		for( var i = 0; i < request.length; i++ ) {
			$("#fichauser").append("<option value="+request[i].id+">"+request[i].codigo+"</option>");
		}
	});
});
/*----------------tocayo---------------*/
$(document).on("click","#edita",function(){
	var id = $(this).attr("data-id");
	var desc=$(this).attr("data-desc"); 
	var estado=$(this).attr("data-estado");
	var resul=$(this).attr("data-resul");
	$("#id").val(id);
	$("#descripcion").val(desc);
	$("#result").val(resul);
	$("#estado option[value = "+estado+"]").attr("selected",true);
 //"#editar").modal("show");
 });	

$(document).on("click","#edituser", function(){
    var id=$(this).attr("data-id");
    var nombre=$(this).attr("data-tipo");
    var name=$(this).attr("data-nombre");
    var apellido=$(this).attr("data-apellido");
    var documento=$(this).attr("data-documento");
    var password=$(this).attr("data-password");
    var estado=$(this).attr("data-estado");
    var telefono=$(this).attr("data-telefono");
    var email=$(this).attr("data-email");
    var nom=$(this).attr("data-nom");
    $("#id").val(id);
    $("#tipodocumento").val(nombre);
    $("#names").val(name);
    $("#apellidos").val(apellido);
    $("#documentos").val(documento);
    $("#passwords").val(password);
    $("#estados option[value = "+estado+"]").attr("selected",true);
    $("#telefonos").val(telefono);
    $("#emails").val(email);
});

$(document).on("click",".anexo", function(){
    var id = $(this).attr("data-id");
    $("input[name='idActividad']").val(id);
    $("#anexo").modal("show");
});

$(document).on("click",".show_anexo", function(){
    var id = $(this).attr("data-id");
    $(".anexos-act").html("");
    $.ajax({
        "url":"anexo/getAnexos/"+id,
        "method":"GET",
        success:function(response){
            var url_anexo = "";

            $.each(response,function(data){
                url_anexo = response[data].url_anexo;
                array = url_anexo.split("/");
                long = array.length;
                index = long -1;
                nombre = array[index];
                $(".anexos-act").append("\
                     <tr>\
                        <td><a href="+url_anexo+">"+nombre+"</a></td>\
                        <td><a href='anexo/delete/"+response[data].id+"' class='btn btn-danger pull-right'> Eliminar</a></td>\
                    </tr>\
                    ");
              //  $(".anexos-act").append("<a>Eliminar</a><br/>");
            });
        },error:function(error){
            console.log(error);
        }
    })
    $("#show_anx").modal("show");
});

$(document).on("click","#editareva",function(){
    var id = $(this).attr("data-id");
    var acti=$(this).attr("data-acti"); 
    var nombre=$(this).attr("data-nombre");
	var descri=$(this).attr("data-descri");
    $("#id").val(id);
    $("#acti").val(acti);
    $("#nombre").val(nombre);
    $("#descripcion").val(descri);
 	$("#evaluacion").modal("show");
 });

$(document).on("click","#editaritem",function(){
    var id = $(this).attr("data-id");
    var eva=$(this).attr("data-eva"); 
    var nombre=$(this).attr("data-nombre");
    var descrip=$(this).attr("data-descrip");
    $("#id").val(id);
    $("#evaluacion").val(eva);
    $("#puntos").val(nombre);
    $("#descripcion").val(descrip);
    
 //"#editar").modal("show");
 });
 $(document).on("click","#opciones",function(){

    var id = $(this).attr("data-id");
    var acti=$(this).attr("data-acti"); 
    var descri=$(this).attr("data-descri");
    $("#id").val(id);
    $("#acti").val(acti);
    $("#descripcion").val(descri);
 });
/*----------------endtocayo---------------*/

