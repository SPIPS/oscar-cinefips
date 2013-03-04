<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap 101 Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet" media="screen"/>
  </head>
  <body>
    <h1>Hello, world!</h1>
    <?php
if(false == $this->session->userdata('login')){
?>
    <a href="<?php echo base_url();?>login">Connexion à Cinefips via Adonis upsud</a>
    <?php } else { ?>
    Welcome scumbag <strong><?php echo $user; ?></strong>! check our videos bitch
    <?php var_export($cat); var_export($videos); ?>
    <?php } ?>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
 </body>
</html>