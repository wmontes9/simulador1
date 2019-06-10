new Vue({
	el:"#appControllerProgram",
	created:function(){
		this.getProgramas();
	},
	data:{
		fillProgram:{"id":"","nombre":"","codigo":"","nivel_formacion":"","estado":"","version":""},
		fillCompetencia:{'id':'','id_programa':'','codigo':'','descripcion':'','url_videoc':''},
		programs:[],
		programa:"",
		competenciaGroup:[],
		newCodigo:"",
		newDescripcion:"",
		newvideoc:"",
		nombre:"",
		codigo:"",
		nivel_formacion:"",
		estado:"",
		version:"",
		resultados:[],
	},
	methods:{
		getProgramas:function(){
			var url = "programa/getProgramas";
			axios.get(url).then(response=>{
				this.programs = response.data
			});
		},
		createProgram:function(){
			var url = "programa";
			axios.post(url,{
				nombre:this.nombre,
				codigo:this.codigo,
				nivel_formacion:this.nivel_formacion,
				estado:this.estado,
				version:this.version,
			}).then(response=>{
				this.getProgramas();
				$("#newProgram").modal("hide");
				this.nombre = "";
				this.codigo = "";
				this.nivel_formacion = "";
				this.estado = "";
				this.version = "";
			});
		},
		editProgram:function(program){
			this.fillProgram.id = program.id;
			this.fillProgram.codigo = program.codigo;
			this.fillProgram.nombre = program.nombre;
			this.fillProgram.nivel_formacion = program.nivel_formacion;
			this.fillProgram.estado = program.estado;
			this.fillProgram.version = program.version;
			$("#editProgram").modal("show");
		},
		 updateProgram:function(id){
			var url = "programa/update"+id;
		      axios.put(url,this.fillProgram).then(response=>{
		        this.getProgramas();
		            $("#editProgram").modal("hide");
		            $.sweetModal({
		                content: 'Programa actualizado correctamente',
		                icon: $.sweetModal.ICON_SUCCESS
		            });
		      });
		    },
		    deleteProgram:function(id){
		    	var url = "programa/"+id;
		    	axios.delete(url).then(response=>{
					this.getProgramas();
					$.sweetModal({
						content: 'Contenido eliminado.',
						icon: $.sweetModal.ICON_SUCCESS
					});
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
					$("#detailcompetencia").modal("hide");
					$.sweetModal({
						content: 'Competencia creada correctamente',
						icon: $.sweetModal.ICON_SUCCESS
					});
					this.newCodigo = "";
					this.newDescripcion = "";
					this.newvideoc = "";
					$(".formNewGrupo").hide();
				});
			},
		getCompetencia:function(id, nombre){
			var url = "competencia/getCompetencia/"+id;
			axios.get(url).then(response=>{
				//alert(nombre);
				//console.log(response.data);
				//console.log(this.programa);
				this.competenciaGroup = response.data;
				//console.log(response.data[0].id_programa);
				//this.programa = response.data.id_programa;
				//console.log(response.data);
				//console.log(response.data.id_programa);
				//this.nombre = nombre;
				this.nombre = nombre;
				$("#detailcompetencia").modal("show");
			});
		  },	
		  editComp:function(competencia){
			this.fillCompetencia.id = competencia.id;
			this.fillCompetencia.id_programa = competencia.id_programa;
			this.fillCompetencia.codigo = competencia.codigo;
			this.fillCompetencia.descripcion = competencia.descripcion;
			this.fillCompetencia.url_videoc = competencia.url_videoc;
			$("#detailcompetencia").modal("hide");
			$("#editGrup").modal("show");
		  },
		  updateComp:function(id){
			var url = "competencia/"+id;
			axios.put(url,this.fillCompetencia).then(response=>{
			  $("#editGrup").modal("hide");
			});
		  },
		  deleteComp:function(id,idCentro){
			var url = "competencia/"+id;
			axios.delete(url).then(response=>{
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
				this.getProgramas();
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
			getfichas(id){
				var url = "ficha/"+id;
				axios.get(url).then(response=>{
					$(location).attr("href","ficha");
				});
			}
	}
});