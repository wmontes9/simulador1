<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>

	<style>
	*{
		margin:0;
		padding: 0;
		box-sizing: border-box;
	}
	.body{
		background: #f1eeee !important;
		height: 100% !important;
		width: 100% !important;
		color: #777 !important;
		max-width: 100% !important;
	}

	.app{
		width: 80% !important;
		margin: auto !important;
		background: #fff !important;
		display: block !important;
	}
	.h1{
		background: #11423c !important;
		width: 100% !important;
		text-align: center !important;
		color: #fff !important;
		padding: 15px 0 !important;
	}
	.title {
		padding: 25px 20px !important;
		font-size: 22px !important;
		text-align: center !important;
	}
	.description{
		padding: 15px 20px !important;
		font-size: 17px !important;
		text-align: center !important;
	}
	.option a {
		display: block !important;
		text-decoration: none !important;
		text-align: center !important;
		width: 200px !important;
		border: 1px #da7217 solid !important;
		border-radius: 20px !important;
		padding: 14px 18px !important;
		margin: 20px auto 0 !important;
		color: #777 !important;
	}

	.note{
    text-align: center !important;
    background: #777 !important;
    color: #fff !important;
    margin-top: 40px !important;
}
</style>
</head>
<body>
	<section class="body">
		<div class="app">
			<div class="">
				<h1 class="h1">Simulador sena cegafe</h1>
				<p class="title">
					<span>Restablecimiento de contraseña</span>
				</p>
				<p class="description">
					hemos recibido una solicitud para restablecer la contraseña, para continuar con el proceso haz clic en el enlace:
				</p>
				<p class="option">
					<a href="{{url('u/nueva_contraseña',$str)}}">Restablecer</a>
				</p>
				<p class="note">	
					Si no has sido tú quien ha enviado la solicitud, ignora este mensaje.
				</p>
			</div>
		</div>

	</section>
</body>
</html>

