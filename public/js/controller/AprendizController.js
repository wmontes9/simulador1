new Vue({
	el:"#appControllerAprendiz",
	created:function(){
		this.getCasos();
	},
	data:{
        fillCaso:{"id":"","titulo":"","descripcion":"","url_imagen":"","url_video":""},
		casosinicio:[],
		competencias:[],
		resultados:[],
        titulo:"",
        descripcion:"",
		url_imagen:"",
		url_video:"",
        file:"",
		id:"",
	},methods:{
		getCasos:function(){
			axios.get("infocasoUsuario").then(response=>{
				this.competencias = response.data[0];
				this.resultados = response.data[1];
				this.casosinicio = response.data[2];
			});
		},
		getCasoUsuario:function(id){
			$(location).attr("href","caso/"+id);
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
		getCuestionario:function(id){
			var url = "cuestionarioUsuario/"+id
			axios.get(url).then(response=>{
				$(location).attr("href","cuestionarioUsuario");
			});
		},
	}
});