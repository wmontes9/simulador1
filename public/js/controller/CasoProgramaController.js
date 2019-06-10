new Vue({
	el:"#appControllerCasoPrograma",
	created:function(){
        this.getCasoPrograma();
	},
	data:{
		descripcion:"",
		fillObjetivo:{"id":"","id_caso":"","descripcion":""},
        programas:[],
        competencias:[],
	},methods:{
		getCasoPrograma:function(){
			axios.get("../caso/getprogramas").then(response=>{
                this.programas = response.data[0];
                this.competencias = response.data[1];
			});
        },
        getCasoCompetencia:function(){
            var url = "";
			axios.get(url).then(response=>{
				this.competencias = response.data;
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