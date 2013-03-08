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

    <div class="row">
        <div class="span8">
            <img src="img/banniere2.png" />
        </div>
    </div>

    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span3">
          <div class="well sidebar-nav " >
            <ul class="nav nav-list bs-docs-sidenav affix-top" data-spy="affix">
              <li class="nav-header"><a href="Les Oscars de CinéFIPS.htm">Acceuil</a></li>
              <li class="nav-header">Catégories</li>
              <li class="active"><a href="Meilleur_Film.html">Meilleur Film</a></li>
              <li><a href="#">Meilleur Réalisateur</a></li>
              <li><a href="#">Meilleure Actrice</a></li>
              <li><a href="#">Meilleur Acteur</a></li>
              <li><a href="#">Meilleur Espoir Féminin</a></li>
              <li><a href="#">Meilleur Espoir Masculin</a></li>
              <li><a href="#">Meilleur Premier Film</a></li>
              <li><a href="#">Meilleur Scenario Original</a></li>
              <li><a href="#">Meilleur Montage</a></li>
              <li><a href="#">Meilleur Effet Visuel</a></li>
              <li><a href="#">Meilleure Vidéo Evènement</a></li>
              <li><a href="#">Meilleure Pub</a></li>
              <li><a href="#">Meilleur Teaser</a></li>
              <li><a href="#">Meilleur Guest</a></li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        <div class="span9">
        
        <?php if(false == $this->session->userdata('login')){ ?>
        <a href="<?php echo base_url();?>login">Connexion à Cinefips via Adonis upsud</a>
        <?php } else { ?>
        Welcome scumbag <strong><?php echo $user; ?></strong>! check our videos bitch
          <ul class="thumbnails">
            <li>
              <div class="thumbnail">
                <h3>Concours Dunod</h3>
                <iframe width="450" height="260" src="http://www.youtube.com/embed/CPl8kpbH66M" frameborder="0" allowfullscreen></iframe>
                <p>Réalisateur: Pierre Liffran</br>Acteurs: Guillaume Le Page / Luc Sarrat / Valentin Roux</p>
              </div>
            </li>
            <li>
              <div class="thumbnail">
                <h3>Meutre au Manoir</h3>
                <iframe width="450" height="260" src="http://www.youtube.com/embed/TW5qj8s5y3Y" frameborder="0" allowfullscreen></iframe>
                <p>Réalisateur: Ambre Verdaguer / Marion Dequidt / Pierre Liffran</br>Acteurs: Arnaud / Fabian / Julia / Marion / Ambre / Pierre / Luc</p>
              </div>
            </li>
            <li>
              <div class="thumbnail">
                <h3>Concours Dunod</h3>
                <iframe width="560" height="315" src="http://www.youtube.com/embed/CPl8kpbH66M" frameborder="0" allowfullscreen></iframe>
                <p>Réalisateur: Pierre Liffran</br>Acteurs: Guillaume Le Page / Valentin Roux</p>
              </div>
            </li>
            <li>
              <div class="thumbnail">
                <h3>Concours Dunod</h3>
                <iframe width="560" height="315" src="http://www.youtube.com/embed/CPl8kpbH66M" frameborder="0" allowfullscreen></iframe>
                <p>Réalisateur: Pierre Liffran</br>Acteurs: Guillaume Le Page / Valentin Roux</p>
              </div>
            </li>
          </ul>
        </div><!--/span-->
        <pre><?php var_export($cat);?></pre>
          <pre><?php var_export($videos); ?></pre>
    <?php } ?>
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
