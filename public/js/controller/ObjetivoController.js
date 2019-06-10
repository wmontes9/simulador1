new Vue({
	el:"#appControllerObjetivo",
	created:function(){
		this.getObjetivos();
	},
	data:{
		descripcion:"",
		fillObjetivo:{"id":"","id_caso":"","descripcion":""},
		objetivos:[],
	},methods:{
		getObjetivos:function(){
			axios.get("getObjetivo").then(response=>{
				this.objetivos = response.data;
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
		deleteobjetivoCaso:function(id){
			var url = "objetivo/"+id;
			axios.delete(url).then(response=>{
				this.getObjetivos();
			});
		}, 
	}
});