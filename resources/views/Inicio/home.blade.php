@extends("layouts.app")

@section("content")
	<!--modal-login-->
<div class="modal fade" id="add_new_user_modal">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" style="display:none;"></h4>
                <h3 class="text-center">Iniciar sesión</h3>
			</div>
			<div class="modal-body">
				<form method="POST" role="form">
					<div class="form-group">
						<label for="">Número de documento:</label>&nbsp;&nbsp;&nbsp;
						<input type="text" class="form-control" name="nummero_documento">
					</div>
                    <div class="form-group">
						<label for="">Contraseña:</label>
						<input type="password" class="form-control" name="contrasena" placeholder="******">
					</div>
					<div class="form-group">
                   		<a href="javascript:void(0);" onclick="registrar_user()"><i class="glyphicon glyphicon-user"></i>¿Has olvidado tu contraseña?</a>
            		</div>
					<div class="form-group">
                   		<a href="javascript:void(0);" onclick="registrar_user()"><i class="glyphicon glyphicon-user"></i> Registrase</a>
            		</div>
					<div class="form-group text-center">
	  					<input type="hidden" id="action" name="action" value="add">
	  					<input type="hidden" id="user_id" name="user_id" value="">
	  					<input type="button" id="submit-login" class="btn btn-primary" value="Ingresar">
	  					<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>         
          			</div>        
            	<span id="result"></span> 
				</form>				
			</div>
		</div>
	</div>
</div>
 <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <!--<li data-target="#myCarousel" data-slide-to="3"></li>-->
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="{{ url('img/Bannerplataforma.jpg') }}" alt="Chania" width="100%" height="345">
            <div class="carousel-caption">
              <!--<h3>Inicio</h3>
              <p>Pagina de inicio.</p>-->
            </div>
          </div>

    	    <div class="item">
            <img src="slider2/img/landscape/06.png" alt="Flower" width="100%" max-height="345">
          	<div class="carousel-caption">
              <!--<h3>¿Quienes somos?</h3>-->
            </div>
          </div>
        
          <div class="item">
            <img src="slider2/img/landscape/03.png" alt="Flower" width="100%" max-height="345">
            <div class="carousel-caption">
              <!--<h3>Otros</h3>-->
            </div>
          </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
	<br><br><br><br>
	<div class="row">
		<div class="conteiner">
			<div class="enlaces-externos">
				<center>
					<ul>
						<li>
							<a href="#">
								<img src="{{url('img/icon-biblioteca.png')}}" alt="" width="100"><br>
								Biblioteca <br> SENA
							</a>
						</li>
						<li>
							<a href="#">
								<img src="{{url('img/icono-vigilancia tecnologica.png')}}" alt="" width="100"><br>
								Vigilancia <br> tecnológica
							</a>
						</li>
					</ul>
				</center>
			</div>
		</div>
	</div>
	<br><br><br><br>
	
@endsection