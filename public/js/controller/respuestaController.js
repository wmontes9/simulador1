new Vue({
	el:"#appControllerRespuesta",
	created:function(){
		this.getRespuesta();
	},
	data:{
		fillRespuesta:{"id":"","id_pregunta":"","descripcion":"","validacion":""},
		respuestas:[],
	},methods:{
		getRespuesta:function(){
			axios.get("getRespuesta").then(response=>{
				this.respuestas = response.data;
			});
		},
		editrespuesta:function(respuesta){
				this.fillRespuesta.id = respuesta.id;
				this.fillRespuesta.id_pregunta = respuesta.id_pregunta;
                this.fillRespuesta.descripcion = respuesta.descripcion;
                this.fillRespuesta.validacion = respuesta.validacion;
				$("#editRespuesta").modal("show");
		},
		updateRespuesta:function(id){
			var url = "respuesta/"+id;
			axios.put(url,this.fillRespuesta).then(response=>{
				this.getRespuesta();
				$("#editRespuesta").modal("hide");
			});
		},
		deleterespuesta:function(id){
			var url = "respuesta/"+id;
			axios.delete(url).then(response=>{
				if(response.data != 0){
					$.sweetModal({
					   content: 'No se ha podido eliminar ya que tiene resultados  asociadas ',
					   icon: $.sweetModal.ICON_WARNING
					 });
				 }else{
					 $.sweetModal({
						   content: 'Respuesta eliminada correctamente',
						   icon: $.sweetModal.ICON_SUCCESS
				   });
				   this.getRespuesta();
				 }
               
			});
		}, 
	}
});