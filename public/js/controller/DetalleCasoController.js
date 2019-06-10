new Vue({
	el:"#appControllerDetalle",
	created:function(){
		this.getDetalles();
	},
	data:{
		proposito:"",
		audiencia:"",
		enfoque:"",
		metodo:"",
		fecha_elaboracion:"",
		estado:"",
		tiempo_promedio:"",
		fillDetalle:{"id":"","id_caso":"","proposito":"","audiencia":"","enfoque":"","metodo":"","fecha_elaboracion":"","estado":"","tiempo_promedio":""},
		detalles:[],
		selected: "",
	},methods:{

		getDetalles:function(){
			axios.get("getDetalle").then(response=>{
				this.detalles = response.data;
			});
		},
		editDetalleCaso:function(detalle){
				this.fillDetalle.id = detalle.id;
				this.fillDetalle.id_caso = detalle.id_caso;
				this.fillDetalle.proposito = detalle.proposito;
				this.fillDetalle.audiencia = detalle.audiencia;
				this.fillDetalle.enfoque = detalle.enfoque;
				this.fillDetalle.metodo = detalle.metodo;
				this.fillDetalle.fecha_elaboracion = detalle.fecha_elaboracion;
				this.fillDetalle.estado = detalle.estado;
				$("#estado option[value = "+detalle.estado+"]").attr("selected",true);
				this.fillDetalle.tiempo_promedio = detalle.tiempo_promedio;
				$("#editDetalleCaso").modal("show");
		},
		updateDetalleCaso:function(id){
			var url = "detalle/"+id;
			axios.put(url,this.fillDetalle).then(response=>{
				this.getDetalles();
				$("#editDetalleCaso").modal("hide");
			});
		},
		deleteDetalleCaso:function(id){
			var url = "detalle/"+id;
			axios.delete(url).then(response=>{
				this.getDetalles();
			});
		}, 
	}
});