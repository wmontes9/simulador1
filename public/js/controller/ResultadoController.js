new Vue({
	el:"#appControllerResult",
	created:function(){
		this.getResult();
	},
	data:{
		codigo:"",
		descripcion:"",
		fillResultado:{"id":"","id_competencia":"","codigo":"","descripcion":""},
		resultados:[],
	},methods:{
		getResult:function(){
			axios.get("getResultados").then(response=>{
				this.resultados = response.data;
			});
		},
		editResult:function(resultado){
				this.fillResultado.id = resultado.id;
				this.fillResultado.id_competencia = resultado.id_competencia;
				this.fillResultado.codigo = resultado.codigo;
				this.fillResultado.descripcion = resultado.descripcion;
				$("#editResultado").modal("show");
		},
		updateResultado:function(id){
			var url = "resultado/"+id;
			axios.put(url,this.fillResultado).then(response=>{
				this.getResult();
				$("#editResultado").modal("hide");
			});
		},
		deleteResult:function(id){
			var url = "resultado/"+id;
			axios.delete(url).then(response=>{
				var id = response.data;
				this.getResult();
			});
		}, 
	}
});