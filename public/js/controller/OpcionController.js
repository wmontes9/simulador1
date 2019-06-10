new Vue({
	el:"#opcionusuario",
	created:function(){
		this.getOpciones();
	},
	data:{
		opciones:[],
	},methods:{
		getOpciones:function(){
			var url = "getOpciones";
			axios.get(url).then(response=>{
				this.opciones = response.data;
			});
		},
	}
});
$(document).on('change','#select1',function(){
	var opcion = $(this).val();
	$("#select1").prop("disabled","disabled");
	$('#select2,#select3,#select4,#select5,#select6,#select7,#select8,#select9,#select10,#select11,#select12').each(function(){
    $('#select2 option[value="'+opcion+'"]').remove();
    $('#select3 option[value="'+opcion+'"]').remove();
    $('#select4 option[value="'+opcion+'"]').remove();
    $('#select5 option[value="'+opcion+'"]').remove();
   	$('#select6 option[value="'+opcion+'"]').remove();
    $('#select7 option[value="'+opcion+'"]').remove();
    $('#select8 option[value="'+opcion+'"]').remove();
    $('#select9 option[value="'+opcion+'"]').remove();
    $('#select10 option[value="'+opcion+'"]').remove();
    $('#select11 option[value="'+opcion+'"]').remove();
    $('#select12 option[value="'+opcion+'"]').remove();
  	})
});
$(document).on('change','#select2',function(){
    var opcion = $(this).val();
    $("#select2").prop("disabled","disabled");
    $('#select1,#select3,#select4,#select5,#select6,#select7,#select8,#select9,#select10,#select11,#select12').each(function(){
    	$('#select1 option[value="'+opcion+'"]').remove();
    	$('#select3 option[value="'+opcion+'"]').remove();
    	$('#select4 option[value="'+opcion+'"]').remove();
    	$('#select5 option[value="'+opcion+'"]').remove();
    	$('#select6 option[value="'+opcion+'"]').remove();
    	$('#select7 option[value="'+opcion+'"]').remove();
    	$('#select8 option[value="'+opcion+'"]').remove();
    	$('#select9 option[value="'+opcion+'"]').remove();
    	$('#select10 option[value="'+opcion+'"]').remove();
    	$('#select11 option[value="'+opcion+'"]').remove();
    	$('#select12 option[value="'+opcion+'"]').remove();
    })
});
$(document).on('change','#select3',function(){
    var opcion = $(this).val();
    $("#select3").prop("disabled","disabled");
    $('#select1,#select2,#select4,#select5,#select6,#select7,#select8,#select9,#select10,#select11,#select12').each(function(){
    	$('#select1 option[value="'+opcion+'"]').remove();
    	$('#select2 option[value="'+opcion+'"]').remove();
    	$('#select4 option[value="'+opcion+'"]').remove();
    	$('#select5 option[value="'+opcion+'"]').remove();
    	$('#select6 option[value="'+opcion+'"]').remove();
    	$('#select7 option[value="'+opcion+'"]').remove();
    	$('#select8 option[value="'+opcion+'"]').remove();
    	$('#select9 option[value="'+opcion+'"]').remove();
    	$('#select10 option[value="'+opcion+'"]').remove();
    	$('#select11 option[value="'+opcion+'"]').remove();
    	$('#select12 option[value="'+opcion+'"]').remove();
    })
});
$(document).on('change','#select4',function(){
    var opcion = $(this).val();
    $("#select4").prop("disabled","disabled");
    $('#select1,#select2,#select3,#select5,#select6,#select7,#select8,#select9,#select10,#select11,#select12').each(function(){
    	$('#select1 option[value="'+opcion+'"]').remove();
    	$('#select2 option[value="'+opcion+'"]').remove();
    	$('#select3 option[value="'+opcion+'"]').remove();
    	$('#select5 option[value="'+opcion+'"]').remove();
    	$('#select6 option[value="'+opcion+'"]').remove();
    	$('#select7 option[value="'+opcion+'"]').remove();
    	$('#select8 option[value="'+opcion+'"]').remove();
    	$('#select9 option[value="'+opcion+'"]').remove();
    	$('#select10 option[value="'+opcion+'"]').remove();
    	$('#select11 option[value="'+opcion+'"]').remove();
    	$('#select12 option[value="'+opcion+'"]').remove();
    })
});
$(document).on('change','#select5',function(){
    var opcion = $(this).val();
    $("#select5").prop("disabled","disabled");
    $('#select1,#select2,#select3,#select4,#select6,#select7,#select8,#select9,#select10,#select11,#select12').each(function(){
    	$('#select1 option[value="'+opcion+'"]').remove();
    	$('#select2 option[value="'+opcion+'"]').remove();
    	$('#select3 option[value="'+opcion+'"]').remove();
    	$('#select4 option[value="'+opcion+'"]').remove();
    	$('#select6 option[value="'+opcion+'"]').remove();
    	$('#select7 option[value="'+opcion+'"]').remove();
    	$('#select8 option[value="'+opcion+'"]').remove();
    	$('#select9 option[value="'+opcion+'"]').remove();
    	$('#select10 option[value="'+opcion+'"]').remove();
    	$('#select11 option[value="'+opcion+'"]').remove();
    	$('#select12 option[value="'+opcion+'"]').remove();
    })
});
$(document).on('change','#select6',function(){
    var opcion = $(this).val();
    $("#select6").prop("disabled","disabled");
    $('#select1,#select2,#select3,#select4,#select5,#select7,#select8,#select9,#select10,#select11,#select12').each(function(){
    	$('#select1 option[value="'+opcion+'"]').remove();
    	$('#select2 option[value="'+opcion+'"]').remove();
    	$('#select3 option[value="'+opcion+'"]').remove();
    	$('#select4 option[value="'+opcion+'"]').remove();
    	$('#select5 option[value="'+opcion+'"]').remove();
    	$('#select7 option[value="'+opcion+'"]').remove();
    	$('#select8 option[value="'+opcion+'"]').remove();
    	$('#select9 option[value="'+opcion+'"]').remove();
    	$('#select10 option[value="'+opcion+'"]').remove();
    	$('#select11 option[value="'+opcion+'"]').remove();
    	$('#select12 option[value="'+opcion+'"]').remove();
    })
});
$(document).on('change','#select7',function(){
    var opcion = $(this).val();
    $("#select7").prop("disabled","disabled");
    $('#select1,#select2,#select3,#select4,#select5,#select6,#select8,#select9,#select10,#select11,#select12').each(function(){
    	$('#select1 option[value="'+opcion+'"]').remove();
    	$('#select2 option[value="'+opcion+'"]').remove();
    	$('#select3 option[value="'+opcion+'"]').remove();
    	$('#select4 option[value="'+opcion+'"]').remove();
    	$('#select5 option[value="'+opcion+'"]').remove();
    	$('#select6 option[value="'+opcion+'"]').remove();
    	$('#select8 option[value="'+opcion+'"]').remove();
    	$('#select9 option[value="'+opcion+'"]').remove();
    	$('#select10 option[value="'+opcion+'"]').remove();
    	$('#select11 option[value="'+opcion+'"]').remove();
    	$('#select12 option[value="'+opcion+'"]').remove();
    })
});
$(document).on('change','#select8',function(){
    var opcion = $(this).val();
    $("#select8").prop("disabled","disabled");
    $('#select1,#select2,#select3,#select4,#select5,#select6,#select7,#select9#select10,#select11,#select12').each(function(){
    	$('#select1 option[value="'+opcion+'"]').remove();
    	$('#select2 option[value="'+opcion+'"]').remove();
    	$('#select3 option[value="'+opcion+'"]').remove();
    	$('#select4 option[value="'+opcion+'"]').remove();
    	$('#select5 option[value="'+opcion+'"]').remove();
    	$('#select6 option[value="'+opcion+'"]').remove();
    	$('#select7 option[value="'+opcion+'"]').remove();
    	$('#select9 option[value="'+opcion+'"]').remove();
    	$('#select10 option[value="'+opcion+'"]').remove();
    	$('#select11 option[value="'+opcion+'"]').remove();
    	$('#select12 option[value="'+opcion+'"]').remove();
    })
});
$(document).on('change','#select9',function(){
    var opcion = $(this).val();
    $("#select9").prop("disabled","disabled");
    $('#select1,#select2,#select3,#select4,#select5,#select6,#select7,#select8,#selec10,#select11,#select12').each(function(){
    	$('#select1 option[value="'+opcion+'"]').remove();
    	$('#select2 option[value="'+opcion+'"]').remove();
    	$('#select3 option[value="'+opcion+'"]').remove();
    	$('#select4 option[value="'+opcion+'"]').remove();
    	$('#select5 option[value="'+opcion+'"]').remove();
    	$('#select6 option[value="'+opcion+'"]').remove();
    	$('#select7 option[value="'+opcion+'"]').remove();
    	$('#select8 option[value="'+opcion+'"]').remove();
    	$('#select10 option[value="'+opcion+'"]').remove();
    	$('#select11 option[value="'+opcion+'"]').remove();
    	$('#select12 option[value="'+opcion+'"]').remove();
    })
});
$(document).on('change','#select10',function(){
    var opcion = $(this).val();
    $("#select10").prop("disabled","disabled");
    $('#select1,#select2,#select3,#select4,#select5,#select6,#select7,#select8,#select9,#select11,#select12').each(function(){
    	$('#select1 option[value="'+opcion+'"]').remove();
    	$('#select2 option[value="'+opcion+'"]').remove();
    	$('#select3 option[value="'+opcion+'"]').remove();
    	$('#select4 option[value="'+opcion+'"]').remove();
    	$('#select5 option[value="'+opcion+'"]').remove();
    	$('#select6 option[value="'+opcion+'"]').remove();
    	$('#select7 option[value="'+opcion+'"]').remove();
    	$('#select8 option[value="'+opcion+'"]').remove();
    	$('#select9 option[value="'+opcion+'"]').remove();
    	$('#select11 option[value="'+opcion+'"]').remove();
    	$('#select12 option[value="'+opcion+'"]').remove();
    })
});
$(document).on('change','#select11',function(){
    var opcion = $(this).val();
    $("#select11").prop("disabled","disabled");
    $('#select1,#select2,#select3,#select4,#select5,#select6,#select7,#select8,#select9,#select10,#select12').each(function(){
    	$('#select1 option[value="'+opcion+'"]').remove();
    	$('#select2 option[value="'+opcion+'"]').remove();
    	$('#select3 option[value="'+opcion+'"]').remove();
    	$('#select4 option[value="'+opcion+'"]').remove();
    	$('#select5 option[value="'+opcion+'"]').remove();
    	$('#select6 option[value="'+opcion+'"]').remove();
    	$('#select7 option[value="'+opcion+'"]').remove();
    	$('#select8 option[value="'+opcion+'"]').remove();
    	$('#select9 option[value="'+opcion+'"]').remove();
    	$('#select10 option[value="'+opcion+'"]').remove();
    	$('#select12 option[value="'+opcion+'"]').remove();
    })
});
$(document).on('change','#select12',function(){
    var opcion = $(this).val();
    $("#select12").prop("disabled","disabled");
    $('#select1,#select2,#select3,#select4,#select5,#select6,#select7,#select8,#select9,#select10,#select11,#selec13').each(function(){
    	$('#select1 option[value="'+opcion+'"]').remove();
    	$('#select2 option[value="'+opcion+'"]').remove();
    	$('#select3 option[value="'+opcion+'"]').remove();
    	$('#select4 option[value="'+opcion+'"]').remove();
    	$('#select5 option[value="'+opcion+'"]').remove();
    	$('#select6 option[value="'+opcion+'"]').remove();
    	$('#select7 option[value="'+opcion+'"]').remove();
    	$('#select8 option[value="'+opcion+'"]').remove();
    	$('#select9 option[value="'+opcion+'"]').remove();
    	$('#select10 option[value="'+opcion+'"]').remove();
    	$('#select11 option[value="'+opcion+'"]').remove();
    })
});