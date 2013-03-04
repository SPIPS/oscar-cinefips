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
    <form action="<?php echo base_url(); ?>login/proceed" method="post">
	<input type="text" name="login" />
	<input type="password" name="password" />
	<button type="submit">send!</button>
    </form>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
 </body>
</html>