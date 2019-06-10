new Vue({
	el:"#appControllerCuestionarioUsuario",
	created:function(){
		this.getCuestionario();
	},
	data:{
		titulo:"",
		fillCuestionario:{"id":"","titulo":"","descripcion":"","estado":""},
		cuestionarios:[],
		preguntas:[],
		respuestas:[],
	},methods:{
		getCuestionario:function(){
			axios.get("getCuestionusuario").then(response=>{
				this.cuestionarios = response.data[0];
				this.preguntas = response.data[1];
				this.respuestas = response.data[2];
			});
		},
		getPreguntas:function($id){
			var url = "pregunta/"+$id
				axios.get(url).then(response=>{
					$(location).attr("href","pregunta");
				});
		},
		editobjetivoCaso:function(objetivo){
				this.fillObjetivo.id = objetivo.id;
				this.fillObjetivo.id_caso = objetivo.id_caso;
				this.fillObjetivo.descripcion = objetivo.descripcion;
				$("#editobjetivoCaso").modal("show");
		},
		updateObjetivo:function(id){
			var url = "objetivo/"+id;
			axios.put(url,this.fillObjetivo).then(response=>{
				this.getObjetivos();
				$("#editobjetivoCaso").modal("hide");
			});
		},
		deleteCuestionario:function(id){
			var url = "cuestionario/"+id;
			axios.delete(url).then(response=>{
				if(response.data != 0){
					$.sweetModal({
					   content: 'No se ha podido eliminar ya que tiene resultados  asociadas ',
					   icon: $.sweetModal.ICON_WARNING
					 });
				 }else{
					 $.sweetModal({
						   content: 'Cuestionario eliminado correctamente',
						   icon: $.sweetModal.ICON_SUCCESS
				   });
				   this.getCuestionario();
				 }
               
			});
		}, 
	}
});