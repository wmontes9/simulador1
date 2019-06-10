new Vue({
	el:"#appControllerPregunta",
	created:function(){
		this.getPregunta();
	},
	data:{
		fillPregunta:{"id":"","id_cuestionario":"","descripcion":""},
		preguntas:[],
	},methods:{
		getPregunta:function(){
			axios.get("getPregunta").then(response=>{
				this.preguntas = response.data;
			});
		},
		getPreguntas:function($id){
			$(location).attr("href","pregunta/"+$id);
		},
		getRespuestas:function($id){
			var url = "respuesta/"+$id
				axios.get(url).then(response=>{
					$(location).attr("href","respuesta");
				});
		},
		editpregunta:function(pregunta){
				this.fillPregunta.id = pregunta.id;
				this.fillPregunta.id_cuestionario = pregunta.id_cuestionario;
				this.fillPregunta.descripcion = pregunta.descripcion;
				$("#editPregunta").modal("show");
		},
		updatePregunta:function(id){
			var url = "pregunta/"+id;
			axios.put(url,this.fillPregunta).then(response=>{
				this.getPregunta();
				$("#editPregunta").modal("hide");
			});
		},
		deletepregunta:function(id){
			var url = "pregunta/"+id;
			axios.delete(url).then(response=>{
				if(response.data != 0){
					$.sweetModal({
					   content: 'No se ha podido eliminar ya que tiene resultados  asociados ',
					   icon: $.sweetModal.ICON_WARNING
					 });
				 }else{
					 $.sweetModal({
						   content: 'Pregunta eliminada correctamente',
						   icon: $.sweetModal.ICON_SUCCESS
				   });
				   this.getPregunta();
				 }
               
			});
		}, 
	}
});