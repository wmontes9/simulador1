new Vue({
	el:"#appControllercompetencia",
	created:function(){
		this.getCompetencias();
	},
	data:{
		fillCompetencia:{"id":"","id_programa":"","codigo":"","descripcion":"","url_videoc":""},
        competencias:[],
        newCodigo:"",
		newDescripcion:"",
		newvideoc:"",
	},methods:{
		getCompetencias:function(){
			axios.get("getCompetencia").then(response=>{
				this.competencias = response.data;
			});
        },
        ShowFormGrup:function(){
            $(".formNewGrupo").show();
        },
        newCompetencia:function(){
            var url = "competencia";
            axios.post(url,{
                codigo:this.newCodigo,
                descripcion:this.newDescripcion,
                url_videoc:this.newvideoc,
            }).then(response=>{
                this.getCompetencias();
                $("#detailcompetencia").modal("hide");
                $.sweetModal({
                    content: 'Competencia creada correctamente',
                    icon: $.sweetModal.ICON_SUCCESS
                });
                this.newCodigo = "";
                this.newDescripcion = "";
                this.newvideoc = "";
                $(".formNewGrupo").hide();
                this.getCompetencias();
            });
        },
        editComp:function(competencia){
			this.fillCompetencia.id = competencia.id;
			this.fillCompetencia.id_programa = competencia.id_programa;
			this.fillCompetencia.codigo = competencia.codigo;
			this.fillCompetencia.descripcion = competencia.descripcion;
			this.fillCompetencia.url_videoc = competencia.url_videoc;
			$("#editGrup").modal("show");
		},
		updateComp:function(){
            var url = "competencia/"+ this.fillCompetencia.id;
			axios.put(url,this.fillCompetencia).then(response=>{
                this.getCompetencias();
			    $("#editGrup").modal("hide");
			});
		},
		deleteComp:function(id,idCentro){
			var url = "competencia/"+id;
			axios.delete(url).then(response=>{
            this.getCompetencias();
			  $("#detailcompetencia").modal("hide");
			   if(response.data != 0){
				 $.sweetModal({
					content: 'No se ha podido eliminar ya que tiene resultados  asociadas ',
					icon: $.sweetModal.ICON_WARNING
				  });
			  }else{
				  $.sweetModal({
						content: 'Competencia eliminada correctamente',
						icon: $.sweetModal.ICON_SUCCESS
				});
			  }
			});
		},
		getResultados(id){
            var url = "resultado/"+id;
            axios.get(url).then(response=>{
                $(location).attr("href","resultado");
            });
        },
        getConocimientos(id){
            var url = "conocimiento/"+id;
            axios.get(url).then(response=>{
                $(location).attr("href","conocimiento");
            });
        },
        getCuestionarios(id){
            var url = "cuestionario/"+id;
            axios.get(url).then(response=>{
                $(location).attr("href","cuestionario");
            });
        },
	}
});