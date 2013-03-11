<!DOCTYPE html>
<html lang="fr">
  <head>
	<meta charset="utf-8">
	<title>Les Oscars de CinéFIPS</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Le styles -->
	<link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet" media="screen"/>
	<style type="text/css">
	  body {
		padding-top: 60px;
		padding-bottom: 40px;
	  }
	  .sidebar-nav {
		padding: 9px 0;
	  }
	  .rb-icon {
	  	margin-top:5px;
	  }
	  .rb-navig {
	  	min-width:222px;	  
	  }

	  @media (max-width: 980px) {
		/* Enable use of floated navbar text */
		.navbar-text.pull-right {
		  float: none;
		  padding-left: 5px;
		  padding-right: 5px;
		}
	  }
	</style>
	<link href="<?php echo base_url(); ?>css/bootstrap-responsive.min.css" rel="stylesheet">

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="<?php echo base_url(); ?>js/html5shiv.js"></script>
	<![endif]-->

  </head>

  <body>
  	<div class="navbar  navbar-fixed-top" >
	  <div class="navbar-inner" style="height: 54px;">
		<div class="container-fluid">
		  <a class="brand" href="<?php echo base_url(); ?>" style="display: inline; margin-top: -7px;">Les Oscars de CineFIPS <img src="http://cinefips.bips-asso.fr/img/oscar.png" alt="" style="margin-left: 6px; display: inline;"></a>
		  <div class="nav-collapse collapse">
			<p class="navbar-text pull-right">
				<?php if(false == $this->session->userdata('login')){ ?>
				<a class="btn" href="<?php echo base_url(); ?>login">Connectez-vous</a>
				<?php } else { ?>
			  	<a class="btn" href="#">Connecté en tant que <strong><?php echo $user; ?></strong></a>
			  	<?php } ?>
			</p>
		  </div>
		</div>
	  </div>
	</div>	

	<div class="container-fluid" style="margin-top:20px;">
	  <div class="row-fluid">
		<div class="span3">
		  <div class="well rb-navig affix sidebar-nav">
			<ul class="nav nav-list">
			  <li class="nav-header"><a href="<?php echo base_url(); ?>">Acceuil</a></li>
			  <li class="nav-header">Catégories</li>
			  <?php foreach($cat as $c){ ?>
			  <li <?php echo ' id="cat-'.$c['id'].'" _rb-id="'.$c['id'].'"'; ?>>
			  	<i class="rb-icon pull-left icon-exclamation-sign"></i>
			  	<a href="<?php echo base_url(); ?>welcome/cat/<?php echo $c['id']; ?>"><?php echo $c['nom']; ?></a>
			  </li>
			  <?php } ?>
			</ul>
		  </div><!--/.well -->
		</div><!--/span-->
		<div class="span9">
			<?php if(false == $this->session->userdata('login')){ ?>
		  	<div class="hero-unit">
		  		<h1 style="margin-top:-35px; text-align:center;">Les Oscars de Cinéfips</h1><br />
		  		<div style="text-align:center; margin-bottom:15px;">
			  		<img src="<?php echo base_url();?>img/cinefips-mini.jpg" alt="" width="600" height="400" />
			  	</div>
				<h2>Bonjour Polytechnicien(ne)s!</h2><br />
				<p>Bienvenue sur le site officiel des Oscars de Cinéfips.</p>
				<p>Vous pouvez voter pour nos films, acteurs ou actrices préférés et récompenser les talents de votre école.</p>
				<p>Une cérémonie officielle sera organisée le Mercredi 20 Mars 2013 à 18h dans l'amphi de la MDI pour décerner les fameuses statuettes tant convoitées, donc tenez-vous près !</p>
				<p><a href="<?php echo base_url(); ?>login/" class="btn btn-primary btn-large">Let's get started : se connecter pour voter &raquo;</a></p>
		  	</div>
     		<?php } else { ?>
     		<div class="hero-unit">
			  	<h1 style="margin-top:-35px; text-align:center;">Les Oscars de Cinéfips</h1><br />
     			<div style="text-align:center; margin-bottom:15px;">
			  		<img src="<?php echo base_url();?>img/cinefips-mini.jpg" alt="" width="600" height="400" />
			  	</div>
				<h2>Congratulations!</h2><br />
				<p>You're maintenant connecté !</p>
				<p>Tu peux désormais naviguer entre les différentes catégories et voter :)</p>
		  	</div>
		  	<?php } ?>
		  	<br />
		</div><!--/span-->
	  </div><!--/row-->

	  <hr>

	  <footer>
		<p>© Powered by the <img src="<?php echo base_url(); ?>img/SPIPS.png" style="height:20px;" alt=""/>SPIPS<img src="<?php echo base_url(); ?>img/SPIPS.png" style="height:20px;" alt=""/></p>
	  </footer>

	</div><!--/.fluid-container-->

	<!-- Le javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="http://code.jquery.com/jquery.js"></script>
	<script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>js/videos.js"></script>

  </body>
</html>
