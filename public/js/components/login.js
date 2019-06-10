var login = new Vue({
	el:"#app-login",
	data:{
		documento:"",
		password:"",
		type_document:"1",
		errors:[],
	},methods:{
		login:function(){
			$("#preloader").show();
			axios.post("login",{
				documento:this.documento,
				password:this.password,
				type_document:this.type_document,
			}).then(response=>{
				if(response.data == "1"){
					$("#login").modal("hide");
					$(location).attr("href","administrador/actividad");
					//$(location).attr("href","admin/caso");
				}else if(response.data == "3"){
					$("#login").modal("hide");
					//@ts-check$(location).attr("href","aprendiz/index");
					$(location).attr("href","aprendiz");
				}					
				$("#preloader").hide();
			}).catch(error=>{
				this.errors = error.response.data.errors;
				$("#preloader").hide();
			});
		}
	}
});


