new Vue({
	el:"#appControllerFicha",
	created:function(){
		this.getFichas();
	},
	data:{
        id_programa:"",
        codigo:"",
        fecha_inicio:"",
        fecha_fin:"",
		fillFicha:{"id":"","id_programa":"","codigo":"","fecha_inicio":"","fecha_fin":""},
	    fichas:[],
	},methods:{
		getFichas:function(){
			axios.get("getFicha").then(response=>{
				this.fichas = response.data;
			});
		},
		editficha:function(ficha){
				this.fillFicha.id = ficha.id;
                this.fillFicha.id_programa = ficha.id_programa;
                this.fillFicha.codigo = ficha.codigo;
                this.fillFicha.fecha_inicio = ficha.fecha_inicio;
                this.fillFicha.fecha_fin = ficha.fecha_fin;
				$("#editFicha").modal("show");
		},
		updateFicha:function(id){
			var url = "ficha/"+id;
			axios.put(url,this.fillFicha).then(response=>{
				this.getFichas();
				$("#editFicha").modal("hide");
			});
		},
		deleteficha:function(id){
			var url = "ficha/"+id;
			axios.delete(url).then(response=>{
				if(response.data != 0){
					$.sweetModal({
					   content: 'No se ha podido eliminar ya que tiene resultados  asociadas ',
					   icon: $.sweetModal.ICON_WARNING
					 });
				 }else{
					 $.sweetModal({
						   content: 'Ficha eliminada correctamente',
						   icon: $.sweetModal.ICON_SUCCESS
				   });
				   this.getFichas();
				 }
               
			});
		}, 
	}
});