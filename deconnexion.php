<?php session_start(); ?>
<!doctype html>

<html lang="en">
  <head>

	</head>
	<body class="img js-fullheight" style="background-image: url(images/bg.jpg);" >
    <?php



    session_unset();


  session_destroy();
    header('location:index.php');
?>
	</body>
</html>
