new Vue({
	el:"#appControllerInicio",
	created:function(){
		this.getCasos();
	},
	data:{
        fillCaso:{"id":"","titulo":"","descripcion":"","url_imagen":""},
        casosinicio:[],
        titulo:"",
        descripcion:"",
        url_imagen:"",
        file:"",
		id:"",
	},methods:{
		getCasos:function(){
			axios.get("inicio").then(response=>{
				this.casosinicio = response.data;
			});
		},
		getCasoUsuario:function($id){
			var url = "aprendiz/"+$id
				axios.get(url).then(response=>{
					$(location).attr("href","infoaprendiz");
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