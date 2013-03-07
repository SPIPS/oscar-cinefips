<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Les Oscars de CinéFIPS</title>
        <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet" media="screen"/>
        <!--<script src="countdown.js" type="text/javascript"></script>
        <link rel="stylesheet" href="countdown.css" />-->
    </head>
 
    <body>
 		<div class="row">
 			<p class="span4"> lolilool
 			</p>
 			<p class="span8">lolilol 2
 			</p>
 		</div>
 		<div>
        	<div class="btn dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-user"></i> Se connecter <b class="caret"></b> </a>
				<div class="dropdown-menu">
					<form class="form-horizontal" action="<?php echo base_url(); ?>login/proceed" method="post">
					  <div class="control-group">
					    <label class="control-label" for="inputEmail">Email</label>
					    <div class="controls">
					      <input type="text" id="inputEmail" name="login" placeholder="prenom.nom">
					    </div>
					  </div>
					  <div class="control-group">
					    <label class="control-label" for="inputPassword">Password</label>
					    <div class="controls">
					      <input type="password" id="inputPassword" name="password" placeholder="password adonis">
					    </div>
					  </div>
					  <div class="control-group">
					    <div class="controls">
					      <label class="checkbox">
					        <input type="checkbox" disabled="disabled"> Remember me
					      </label>
					      <button type="submit" class="btn">Sign in</button>
					    </div>
					  </div>
					</form>
				</div>
        	</div>
    	</div>
    	<script src="http://code.jquery.com/jquery.js"></script>
    	<script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
    </body>
</html>