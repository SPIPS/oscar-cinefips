<!DOCTYPE html>
<html lang="fr">
  <head>
	<meta charset="utf-8">
	<title>Les Oscars de CinéFIPS</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="shortcut icon" href="<?php echo base_url(); ?>favicon.ico">

	<!-- Le styles -->
	<link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet" media="screen"/>
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/font-awesome.min.css">
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
	  	min-width:224px;	  
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
			  	<a class="btn" id="connected" href="#">Connecté en tant que <strong><?php echo $user; ?></strong></a>
			  	<a class="btn btn-warning" href="<?php echo base_url(); ?>login/logout">Déconnexion</a>
			  	<?php } ?>
			</p>
		  </div>
		</div>
	  </div>
	</div>	

	<div class="container-fluid" style="margin-top:20px">
	  <div class="row-fluid">
		<div class="span3">
		  <div class="well rb-navig affix sidebar-nav">
			<ul class="nav nav-list">
			  <li class="nav-header"><a href="<?php echo base_url(); ?>">Acceuil</a></li>
			  <li class="nav-header">Catégories</li>
			  <?php foreach($cat as $c){ ?>
			  <li <?php echo ' id="cat-'.$c['id'].'" _rb-id="'.$c['id'].'"'; if( $c['id'] == $active_cat){ echo ' class="active" ';} ?>>
			  	<i class="rb-icon pull-left icon-exclamation-sign"></i>
			  	<a href="<?php echo base_url(); ?>welcome/cat/<?php echo $c['id']; ?>"><?php echo $c['nom']; ?></a>
			  </li>
			  <?php } ?>
			</ul>
		  </div><!--/.well -->
		</div><!--/span-->
		<div class="span9">
			<h2 style="text-align: center;" id="titreCategorieActive"></h2>
			<?php if(false == $this->session->userdata('login')){ ?>
		  	<div class="hero-unit">
				<p>N'oubliez pas de vous connecter pour voter :-)</p>
				<p><a href="<?php echo base_url(); ?>login/" class="btn btn-primary btn-large">Se connecter &raquo;</a></p>
		  	</div>
     		<?php } ?>
		  <ul class="thumbnails">
		  	<?php foreach($videos as $v){ ?>
			<li>
			  <div class="thumbnail">
			  	<?php $cat_spec = array(2,3,4,5,6,16);
			  	if($active_cat == 2){ ?>
			  	<h3><?php echo $v['realisateur']; ?></h3>
		  		<?php } elseif(in_array($active_cat, $cat_spec)){ ?>
			  	<h3><?php echo $v['acteurs']; ?></h3>
			  	<?php } else { ?> 
			  	<h3><?php echo $v['nom']; ?></h3>
			  	<?php } ?>
				<?php echo $v['iframe']; ?>
				<!--<iframe width="450" height="260" src="http://www.youtube.com/embed/CPl8kpbH66M" frameborder="0" allowfullscreen></iframe>-->
				<?php if($active_cat == 2){ ?>
			  	<p><strong>Vidéo:</strong> <?php echo $v['nom']; ?><br /><strong>Acteurs: </strong><?php echo $v['acteurs']; ?></p>
		  		<?php } elseif(in_array($active_cat, $cat_spec)){ ?>
			  	<p><strong>Vidéo:</strong> <?php echo $v['nom']; ?><br /><strong>Réalisateur:</strong> <?php echo $v['realisateur']; ?></p>
			  	<?php } else { ?> 
			  	<p><strong>Réalisateur:</strong> <?php echo $v['realisateur']; ?><br /><strong>Acteurs: </strong><?php echo $v['acteurs']; ?></p>
			  	<?php } ?>
				<p class="vote" id="vote-<?php echo $v['id']; ?>">
					<button type="button" class="btn btn-success" href="#" _rb-id-cat="<?php echo $active_cat; ?>" _rb-id-vid="<?php echo $v['id']; ?>">
						<i class="icon-thumbs-up icon-large"></i> Vote
					</button>
					<button type="button" style="display:none;" class="btn btn-mini btn-inverse btn-unvote" href="#" _rb-id-cat="<?php echo $active_cat; ?>" _rb-id-vid="<?php echo $v['id']; ?>">
						<i class="icon-trash"></i> Retirer mon vote
					</button>
				</p>
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
	<script src="<?php echo base_url(); ?>js/videos.js"></script>

  </body>
</html>
