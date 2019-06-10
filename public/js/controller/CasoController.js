new Vue({
	el:"#appControllerCaso",
	created:function(){
		this.getCaso();
	},
	data:{
        fillCaso:{"id":"","titulo":"","descripcion":"","url_imagen":"","url_video":""},
        casos:[],
        titulo:"",
        descripcion:"",
		url_imagen:"",
		url_video:"",
        file:"",
		id:"",
	},
	methods:{
		getCaso:function(){
			var url = "caso/getCasos";
			axios.get(url).then(response=>{
			  this.casos = response.data
			});
		},
		createCaso:function(){
			var url = "caso";
			axios.post(url,{
				titulo:this.titulo,
				descripcion:this.descripcion,
				url_imagen:this.url_imagen,
				url_video:this.url_video,         
			}).then(response=>{
				this.getCaso();
				$("#newCaso").modal("hide");
				this.titulo = "";
				this.descripcion = "";
				this.url_imagen = "";
				this.url_video  = "";
			});
		},
		editCaso:function(caso){
            this.id = caso.id;
			this.fillCaso.titulo = caso.titulo;
            this.fillCaso.descripcion = caso.descripcion;
			this.fillCaso.url_imagen = caso.url_imagen;
			this.fillCaso.url_video = caso.url_video;
            var ruta = $("#ruta").val();
            var url = ruta+""+this.id;
            $("#formUpdateCaso").attr("action",url);
			$("#editCaso").modal("show");
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
		    deleteCaso:function(id){
		    	var url = "caso/"+id;
		    	axios.delete(url).then(response=>{                    
                    $("#detailcompetencia").modal("hide");
                    if(response.data != 0){
                      $.sweetModal({
                         content: 'No se ha podido eliminar ya que tiene detalles  asociadas ',
                         icon: $.sweetModal.ICON_WARNING
                       });
                   }else{
                       $.sweetModal({
                             content: 'Caso eliminado correctamente',
                             icon: $.sweetModal.ICON_SUCCESS
                     });
                     this.getCaso();
                   }
		    	});
			},
			getDetalles:function(id){
					var url = "detalle/"+id;
					axios.get(url).then(response=>{
						$(location).attr("href","detalle");
					});
			},
			getObjetivos:function(id){
				var url= "objetivo/"+id;
				axios.get(url).then(response=>{
						$(location).attr("href","objetivo");
				});
			},
			getPrograma:function(id){
					$(location).attr("href","casoprograma/"+id);
			}
        }
    });