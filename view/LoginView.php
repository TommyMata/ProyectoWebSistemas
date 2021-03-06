<?php
require_once 'public/header.php';
?>

<div class="global-container">
	<div class="card login-form">
	<div class="card-body">
		<h3 class="card-title text-center">Iniciar Sesión</h3>
		<div class="card-text">
			<!--
			<div class="alert alert-danger alert-dismissible fade show" role="alert">Incorrect username or password.</div> -->
			<form>
				<!-- to error: add class "has-danger" -->
				<div class="form-group">
					<label for="exampleInputEmail1">Correo</label>
					<input type="email" class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Contraseña</label>
					<input type="password" class="form-control form-control-sm" id="exampleInputPassword1">
				</div>
				<button type="submit" class="btn btn-primary btn-block">Ingresar</button>
				
				<div class="sign-up">
					No tiene cuenta? <a href="?controller=Login&action=showRegistrarse">Crea una ya mismo</a>
				</div>
			</form>
		</div>
	</div>
</div>
</div>


<?php
require_once 'public/footer.php';
?>