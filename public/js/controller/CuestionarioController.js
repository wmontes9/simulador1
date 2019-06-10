new Vue({
	el:"#appControllerCuestionario",
	created:function(){
		this.getCuestionario();
	},
	data:{
		titulo:"",
		fillCuestionario:{"id":"","titulo":"","descripcion":"","estado":""},
		cuestionarios:[],
	},methods:{
		getCuestionario:function(){
			axios.get("getCuestionario").then(response=>{
				this.cuestionarios = response.data;
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