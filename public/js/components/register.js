var register = new Vue({
	el:"#app-register",
	data:{
		name:"",
		apellido:"",
		documento:"",
		password:"",		
		telefono:"",
		email:"",
		type_document:"1"

	},methods:{
		register:function(){
			$("#preloader").show();
			axios.post("register",{
				name:this.name,
				apellido:this.apellido,
				documento:this.documento,
				password:this.password,
				estado:this.estado,
				telefono:this.telefono,
				email:this.email,
				type_document:this.type_document
			}).then(response=>{
				$("#register").modal("hide");
				$(location).attr("href","inicio");
				$("#preloader").hide();
			}).catch(error=>{
				this.errors = error.response.data.errors;
				$("#preloader").hide();
			});

		}
	}
});