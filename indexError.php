<?php include('includes/cabecera.php')?>

	<div class="limiter">
	

		<div class="container-login100">
			<div class="wrap-login100">
			
		
				<form action="login.php" method="get"  class="login100-form validate-form p-l-55 p-r-55 p-t-178">
					<span class="login100-form-title">
						Bienvenido, Registrese
					</span>
			
					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
						<input class="input100" type="text" name="user" placeholder="Usuario">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Please enter password">
						<input class="input100" type="password" name="pass" placeholder="Contraseña">
						<span class="focus-input100"></span>
          </div>

		  	<br/>

			<div class="alert alert-danger alert-dismissible" role="alert">
  			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  			<strong>¡Error!</strong> Usuario o Contraseña Incorrectos, por favor reviselos.
			</div>
          
          <hr/>

					<div class="container-login100-form-btn">
					<input type="submit" class="login100-form-btn" value="Entrar">
					</div>
			
        </form>
        
        <br/><br/>
			</div>
		</div>
	</div>
  
<?php include('includes/pie.php')?>
