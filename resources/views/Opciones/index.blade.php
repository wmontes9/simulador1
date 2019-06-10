@extends("layouts.app")
	@section("content")
		<style>
			
			.trapecio1{

			    width: 250px;
			    height: 0px;
			    border-right: 25px solid transparent;
			    border-left: 25px solid transparent;
			    margin-left: 275px;
			    border-bottom: 50px solid #0B00FF;
			}
			.trapecio-2{
			    width: 300px;
			    height: 10px;
			    border-right: 25px solid transparent;
			    border-left: 25px solid transparent;
			    margin-left: 250px;
			    border-bottom: 50px solid #6B6DFF;
			}
			.trapecio-3{
			    width: 350px;
			    height: 0px;
			    border-right: 25px solid transparent;
			    border-left: 25px solid transparent;
			    margin-left: 225px;
			    border-bottom: 50px solid #01FFF5;
			}
			.trapecio-4{
			    width: 400px;
			    height: 20px;
			    border-right: 25px solid transparent;
			    border-left: 25px solid transparent;
			    margin-left: 200px;
			    border-bottom: 50px solid #00E858;
			    z-index: -3;
			}
			.trapecio-5{
			    width: 450px;
			    height: 0px;
			    border-right: 25px solid transparent;
			    border-left: 25px solid transparent;
			    margin-left: 175px;
			    border-bottom: 50px solid #3FFF00;
			}
			.trapecio-6{
			    width: 500px;
			    height: 0px;
			    border-right: 25px solid transparent;
			    border-left: 25px solid transparent;
			    margin-left: 150px;
			    border-bottom: 50px solid #E1FF00;
			}
			.trapecio-7{
			    width: 550px;
			    height: 0px;
			    border: 0px;
			    border-right: 25px solid transparent;
			    border-left: 25px solid transparent;
			    margin-left: 125px;
			    border-bottom: 50px solid #E8C000;
			}
			.trapecio-8{
			    width: 600px;
			    height: 0px;
			    border: 0px;
			    border-right: 25px solid transparent;
			    border-left: 25px solid transparent;
			    margin-left: 100px;
			    border-bottom: 50px solid #FF9E00;
			}
			.trapecio-9{
			    width: 650px;
			    height: 0px;
			    border: 0px;
			    border-right: 25px solid transparent;
			    border-left: 25px solid transparent;
			    margin-left: 75px;
			    border-bottom: 50px solid #E84F00;
			}
			.trapecio-10{
			    width: 700px;
			    height: 0px;
			    border: 0px;
			    border-right: 25px solid transparent;
			    border-left: 25px solid transparent;
			    margin-left: 50px;
			    border-bottom: 50px solid #FF0A00;
			}
			.trapecio-11{
			    width: 750px;
			    height: 0px;
			    border: 0px;
			    border-right: 25px solid transparent;
			    border-left: 25px solid transparent;
			    margin-left: 25px;
			    border-bottom: 50px solid #E800B7;
			}
			.trapecio-12{
			    width: 800px;
			    height: 0px;
			    border: 0px;
			    border-right: 25px solid transparent;
			    border-left: 25px solid transparent;
			    margin-left: 0px;
			    border-bottom: 50px solid #8E00FF;
			}
		</style>
 
		
    	
        <div class="container">
			<div class="row">
					<div id="opcionusuario">
				<div class="col-md-3">
					<div v-for="opcion in opciones">
						<span>@{{opcion.descripcion}}</span>
					</div>
				</div>
				<div class="col-md-9">
	            <div id="trapecio1" class="trapecio1">
					<select class="form-control option" id="select1">
					   	<option value="0">--Seleccione--</option>
					    <option :value="opcion.id" v-for="opcion in opciones"><span>@{{opcion.descripcion}}</span></option>
					</select>
	            </div>
	            <div  id="trapecio-2" class="trapecio-2">
                    <select class="form-control option" id="select2">
				   	    <option value="0">--Seleccione--</option>
				   	    <option :value="opcion.id" v-for="opcion in opciones"><span>@{{opcion.descripcion}}</span></option> 
				    </select>
                </div>
                <div  id="trapecio-3" class="trapecio-3">
            	    <select class="form-control option" id="select3">
				     	<option value="0">--Seleccione--</option>
				        <option :value="opcion.id" v-for="opcion in opciones"><span>@{{opcion.descripcion}}</span></option> 
				    </select>
        	    </div>
                <div id="trapecio-4" class="trapecio-4">
                    <select class="form-control option" id="select4">
				        <option value="0">--Seleccione--</option>
				        <option :value="opcion.id" v-for="opcion in opciones"><span>@{{opcion.descripcion}}</span></option> 
				    </select>
       		    </div>
			    <div id="trapecio-5" class="trapecio-5">
				    <select class="form-control option" id="select5">
				   	    <option value="0">--Seleccione--</option>
				        <option :value="opcion.id" v-for="opcion in opciones"><span>@{{opcion.descripcion}}</span></option> 
				    </select>
			    </div>
			    <div id="trapecio-6" class="trapecio-6">
				    <select class="form-control option" id="select6">
				   	    <option value="0">--Seleccione--</option>
				        <option :value="opcion.id" v-for="opcion in opciones"><span>@{{opcion.descripcion}}</span></option> 
				    </select>
			    </div>
			    <div id="trapecio-7" class="trapecio-7">   
				    <select class="form-control option" id="select7">
				   	    <option value="0">--Seleccione--</option>
				        <option :value="opcion.id" v-for="opcion in opciones"><span>@{{opcion.descripcion}}</span></option> 
				    </select>
			    </div>
                <div id="trapecio-8" class="trapecio-8">
				    <select class="form-control option" id="select8">
				     	<option value="0">--Seleccione--</option>
				        <option :value="opcion.id" v-for="opcion in opciones"><span>@{{opcion.descripcion}}</span></option> 
				    </select>
			    </div>
			    <div id="trapecio-9" class="trapecio-9">
				    <select class="form-control option" id="select9">
				     	<option value="0">--Seleccione--</option>
				        <option :value="opcion.id" v-for="opcion in opciones"><span>@{{opcion.descripcion}}</span></option> 
				    </select>
			    </div>
			    <div id="trapecio-10" class="trapecio-10">
				    <select class="form-control option" id="select10">
				     	<option value="0">--Seleccione--</option>
				        <option :value="opcion.id" v-for="opcion in opciones"><span>@{{opcion.descripcion}}</span></option> 
				    </select>
			    </div>
			    <div id="trapecio-11" class="trapecio-11">
				    <select class="form-control option" id="select11">
				     	<option value="0">--Seleccione--</option>
				        <option :value="opcion.id" v-for="opcion in opciones"><span>@{{opcion.descripcion}}</span></option> 
				    </select>
			    </div>
			    <div id="trapecio-12" class="trapecio-12">
				    <select class="form-control option" id="select12">
				     	<option value="0">--Seleccione--</option>
				        <option :value="opcion.id" v-for="opcion in opciones"><span>@{{opcion.descripcion}}</span></option> 
				    </select>
			    </div>
			</div>
				</div>
			</div>
		</div>	
<script type="text/javascript" src="{{ asset('js/controller/OpcionController.js') }}"></script>
@endsection