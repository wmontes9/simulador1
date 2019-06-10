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
		 	getCompetencia:function(id){
				var url = "getCompetencia";
				axios.get(url).then(response=>{
					$(location).attr("href","competencia");
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