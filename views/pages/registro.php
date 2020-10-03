<?php require_once('header.php'); ?>

<h2 class="text-uppercase" align="center">registro</h2>


<!--formulario de registro-->	
<div class="container-fluid">
	<div class="container py-5">
	<form method="POST">
		<div class="form-group">
			<label for="name">Nombre:</label>
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"><i class="fas fa-user"></i></span>				
				</div>
				<input type="text" class="form-control" placeholder="Escriba su Nombre" id="name" name="registroName">	
			</div>				
		</div>
		<div class="form-group">
			<label for="email">Correo Electrónico:</label>
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"><i class="fas fa-envelope"></i></span>
				</div>
				<input type="email" class="form-control" placeholder="Escriba su correo" id="email" name="registroEmail">
			</div>				
		</div>
		<div class="form-group">
			<label for="pwd">Contraseña:</label>
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"><i class="fas fa-lock"></i></span>
				</div>
				<input type="password" class="form-control" placeholder="Escriba su contraseña" id="pwd" name="registroPwd">
			</div>
		</div>

		<!--objeto para invocar el método forms.controller.php-->
		<?php 
		/*
			$registro = new FormsController();
			$registro -> ctrRegistro();
		*/
			$registro = FormsController::ctrRegistro();
			//echo $registro;
			if($registro == "OK"){


				//funcion para limpiar el formulario luego de enviar los datos
				echo 	'<script>
							if(window.history.replaceState){
								window.history.replaceState(null, null, window.location.href)
							}
						</script>';

				//mensaje de confirmación de registro exitoso
				echo '<div class="alert alert-success">Usuario Registrado</div>';
			} 
		?>
		<button type="submit" class="btn btn-primary">Registrarse</button>
	</form>
</div>
</div>
<!--cierre del formulario de registro-->


<?php require_once('footer.php'); ?>