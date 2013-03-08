<!DOCTYPE html>
<html lang="fr">
  <head>
	<meta charset="utf-8">
	<title>Les Oscars de CinéFIPS</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="SPIPS">

	<!-- Le styles -->
	<link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
	<style type="text/css">
	  body {
		padding-top: 40px;
		padding-bottom: 40px;
		background-color: #f5f5f5;
	  }

	  .form-signin {
		max-width: 300px;
		padding: 19px 29px 29px;
		margin: 0 auto 20px;
		background-color: #fff;
		border: 1px solid #e5e5e5;
		-webkit-border-radius: 5px;
		   -moz-border-radius: 5px;
				border-radius: 5px;
		-webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
		   -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
				box-shadow: 0 1px 2px rgba(0,0,0,.05);
	  }
	  .form-signin .form-signin-heading,
	  .form-signin .checkbox {
		margin-bottom: 10px;
	  }
	  .form-signin input[type="text"],
	  .form-signin input[type="password"] {
		font-size: 16px;
		height: auto;
		margin-bottom: 15px;
		padding: 7px 9px;
	  }

	</style>
	<link href="<?php echo base_url(); ?>css/bootstrap-responsive.min.css" rel="stylesheet">

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="<?php echo base_url(); ?>js/html5shiv.js"></script>
	<![endif]-->
  </head>

  <body>

	<div class="container">

	  <form class="form-signin" action="<?php echo base_url(); ?>login/proceed" method="post">
		<h2 class="form-signin-heading">Connectez-vous avec Adonis</h2>
		<input type="text" class="input-block-level" placeholder="prenom.nom">@u-psud.fr
		<input type="password" class="input-block-level" placeholder="password adonis">
		<label class="checkbox">
		  <input type="checkbox" disabled="disabled" value="remember-me"> Remember me
		</label>
		<button class="btn btn-large btn-primary" type="submit">Sign in</button>
	  </form>

	</div> <!-- /container -->

	<!-- Le javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
		<script src="http://code.jquery.com/jquery.js"></script>
		<script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
  </body>
</html>
