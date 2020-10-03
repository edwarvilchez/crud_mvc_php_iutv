<?php require_once('header.php'); ?>


<h2 class="text-uppercase" align="center">ingreso</h2>
<!--formulario de ingreso-->
<div class="container-fluid">
	<div class="container py-5">
		<form>
			<div class="form-group">
				<label for="email">Correo:</label>
				<input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
			</div>
			<div class="form-group">
				<label for="pwd">Contaseña:</label>
				<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>		
	</div>
</div>	
<!--cierre del formulario de ingreso-->

<?php	require_once('footer.php'); ?>


