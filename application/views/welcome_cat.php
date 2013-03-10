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

	<div class="navbar navbar-inverse navbar-fixed-top">
	  <div class="navbar-inner">
		<div class="container-fluid">
		  <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a class="brand" href="#">Oscars</a>
		  <div class="nav-collapse collapse">
			<p class="navbar-text pull-right">
				<?php if(false == $this->session->userdata('login')){ ?>
				<a href="<?php echo base_url(); ?>login">Connectez-vous</a>
				<?php } else { ?>
			  	Connecté en tant que <strong><?php echo $user; ?></strong>
			  	<?php } ?>
			</p>
			<ul class="nav">
			  <li class="active"><a href="#">Home</a></li>
			  <li><a href="#about">About</a></li>
			  <li><a href="#contact">Contact</a></li>
			</ul>
		  </div><!--/.nav-collapse -->
		</div>
	  </div>
	</div>

	<div class="container-fluid">
	  <div class="row-fluid">
		<div class="span3">
		  <div class="well affix sidebar-nav">
			<ul class="nav nav-list">
			  <li class="nav-header"><a href="<?php echo base_url(); ?>">Acceuil</a></li>
			  <li class="nav-header">Catégories</li>
			  <?php foreach($cat as $c){ ?>
			  <li<?php if( $c['id'] == $active_cat){ echo ' class="active" ';} ?>><a href="<?php echo base_url(); ?>welcome/cat/<?php echo $c['id']; ?>"><?php echo $c['nom']; ?></a></li>
			  <?php } ?>
			</ul>
		  </div><!--/.well -->
		</div><!--/span-->
		<div class="span9">
			<?php if(false == $this->session->userdata('login')){ ?>
		  	<div class="hero-unit">
				<h1>Hello, world!</h1>
				<p>Connectez-vous pour voter aux oscars Cinefips BIATCHSSS.</p>
				<p><a href="<?php echo base_url(); ?>login/" class="btn btn-primary btn-large">CONNECT &raquo;</a></p>
		  	</div>
     		<?php } ?>
		  <ul class="thumbnails">
		  	<?php foreach($videos as $v){ ?>
			<li>
			  <div class="thumbnail">
				<h3><?php echo $v['nom']; ?></h3>
				<?php echo $v['iframe']; ?>
				<!--<iframe width="450" height="260" src="http://www.youtube.com/embed/CPl8kpbH66M" frameborder="0" allowfullscreen></iframe>-->
				<p>Réalisateur: <?php echo $v['realisateur']; ?><br />Acteurs: <?php echo $v['acteurs']; ?></p>
			  </div>
			</li>
			<?php } ?>
		</ul>

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

  </body>
</html>
