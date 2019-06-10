new Vue({
	el:"#appControllerConocimiento",
	created:function(){
		this.getConocimientos();
		this.gettipo();
	},
	data:{
		descripcion:"",
		nombre_tipo:"",
		fillConocimiento:{"id":"","descripcion":"","nombre_tipo":"","id_tipo":""},
		conocimientos:[],
		tipos:[],
	},methods:{
		getConocimientos:function(){
			axios.get("getConocimiento").then(response=>{
				this.conocimientos = response.data;
			});
			
		},
		gettipo:function(){
			axios.get("getTipoConocimiento").then(response=>{
				this.tipos = response.data;
			});
		},
		editConocimiento:function(conocimiento){
				this.fillConocimiento.id = conocimiento.id;
				this.fillConocimiento.descripcion = conocimiento.descripcion;
				this.fillConocimiento.nombre_tipo = conocimiento.nombre_tipo;
				this.fillConocimiento.id_tipo = conocimiento.id_tipo;
				$("#tipo option[value = "+conocimiento.id_tipo+"]").attr("selected",true);
				$("#editConocimiento").modal("show");
				
		},
		updateConocimiento:function(id){
			var url = "conocimiento/"+id;
			axios.put(url,this.fillConocimiento).then(response=>{
				this.getConocimientos();
				$("#editConocimiento").modal("hide");
			});
		},
		deleteconocimiento:function(id){
			var url = "conocimiento/"+id;
			axios.delete(url).then(response=>{
				this.getConocimientos();
			});
		},
	}
});