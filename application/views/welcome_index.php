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
    <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../assets/ico/favicon.png">
  </head>

  <body>

    <div class="row">
        <div class="span8">
            <img src="img/banniere2.png">
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
              <li><a href="./Les Oscars de CinéFIPS_files/Les Oscars de CinéFIPS.htm">Meilleur Réalisateur</a></li>
              <li><a href="./Les Oscars de CinéFIPS_files/Les Oscars de CinéFIPS.htm">Meilleure Actrice</a></li>
              <li><a href="./Les Oscars de CinéFIPS_files/Les Oscars de CinéFIPS.htm">Meilleur Acteur</a></li>
              <li><a href="./Les Oscars de CinéFIPS_files/Les Oscars de CinéFIPS.htm">Meilleur Espoir Féminin</a></li>
              <li><a href="./Les Oscars de CinéFIPS_files/Les Oscars de CinéFIPS.htm">Meilleur Espoir Masculin</a></li>
              <li><a href="./Les Oscars de CinéFIPS_files/Les Oscars de CinéFIPS.htm">Meilleur Premier Film</a></li>
              <li><a href="./Les Oscars de CinéFIPS_files/Les Oscars de CinéFIPS.htm">Meilleur Scenario Original</a></li>
              <li><a href="./Les Oscars de CinéFIPS_files/Les Oscars de CinéFIPS.htm">Meilleur Montage</a></li>
              <li><a href="./Les Oscars de CinéFIPS_files/Les Oscars de CinéFIPS.htm">Meilleur Effet Visuel</a></li>
              <li><a href="./Les Oscars de CinéFIPS_files/Les Oscars de CinéFIPS.htm">Meilleure Vidéo Evènement</a></li>
              <li><a href="./Les Oscars de CinéFIPS_files/Les Oscars de CinéFIPS.htm">Meilleure Pub</a></li>
              <li><a href="./Les Oscars de CinéFIPS_files/Les Oscars de CinéFIPS.htm">Meilleur Teaser</a></li>
              <li><a href="./Les Oscars de CinéFIPS_files/Les Oscars de CinéFIPS.htm">Meilleur Guest</a></li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
                  <?php
if(false == $this->session->userdata('login')){
?>
    <a href="<?php echo base_url();?>login">Connexion à Cinefips via Adonis upsud</a>
    <?php } else { ?>
    Welcome scumbag <strong><?php echo $user; ?></strong>! check our videos bitch
          
        <div class="span9">
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
        <p>© Powered by the <img src="img/SPIPS.png" style="height:20px;"/>SPIPS<img src="img/SPIPS.png" style="height:20px;"/></p>
      </footer>

    </div><!--/.fluid-container-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

  

        </div><!--/span-->
      </div><!--/row-->

      <hr>

      <footer>
        <p>&copy; Company 2013</p>
      </footer>

    </div><!--/.fluid-container-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>

  </body>
</html>
