<?php
	session_start();
	if(isset($_SESSION['user'])){
		header('location:home.php');
	}
?>

<?php include('header.php'); ?>

<!--JAVA FILE-->
<script src="../js/principal.js"></script>

<body background="../img/loginbg.jpg" width="100%" height="100">


<div class="atras">
<a href="index.php" class="icon-atras"><i class="fa-solid fa-arrow-left"></i></a>
</div>

<header class="header">
<a href="index.php" class="logo"><img src="../img/logo-crema.png"></a>

</header>


<div class="container">
    <div class="row" id="loginform">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="fa-solid fa-circle-user"></span>&nbsp; Inicia sesión 
                    </h3>
                </div>
            	<div class="panel-body">
                	<form role="form" id="logform">
                    	<fieldset>
                        	<div class="form-group">
                            	<input class="form-control" placeholder="Nombre usuario" name="username" id="username" type="text" autofocus>
                        	</div>
                        	<div class="form-group">
                            	<input class="form-control" placeholder="Contraseña" name="password" id="password" type="password">
                        	</div>
                        	<button type="button" id="loginbutton" class="btn btn-lg btn-block"><span></span> <span id="logtext">Iniciar sesión</span></button>
							<br>
							<span class="pull-left"><span class="registro"><b>¿No tienes cuenta?</b><a  id="signup"> Crea una</a></span>
                    	</fieldset>
                	</form>
            	</div>
            </div>
        </div>
    </div>








    <div class="row" id="signupform" style="display:none;">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="fa-solid fa-circle-user"></span> &nbsp;Regístrate
                    </h3>
                </div>
            	<div class="panel-body">
                	<form role="form" id="signform">
                    	<fieldset>
                        	<div class="form-group">
                            	<input class="form-control" placeholder="Nombre usuario" name="susername" id="susername" type="text" autofocus>
                        	</div>
                        	<div class="form-group">
                            	<input class="form-control" placeholder="Contraseña" name="spassword" id="spassword" type="password">
                        	</div>
                        	<button type="button" id="signupbutton" class="btn btn-lg btn-block"><span></span> <span id="signtext">Crear cuenta</span></button>
							<br>
							<span class="pull-left"><span></span><b>¿Ya tienes una cuenta?</b> <a id="login"> Inicia sesión</a></span>
                    	</fieldset>
                	</form>
            	</div>
            </div>
        </div>
    </div>

    <div id="myalert" style="display:none;">
    	<div class="col-md-4 col-md-offset-4">
    		<div class="alert alert-warning">
    			<center><span id="alerttext"></span></center>
    		</div>
   	 	</div>
    </div>
</div>



</body>
</html>