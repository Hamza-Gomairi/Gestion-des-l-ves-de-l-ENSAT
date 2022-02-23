<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Login 10</title>
	<link rel="stylesheet" href="css1/style.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(images/bg.jpg);" >
<?php
$user=$_SESSION["name"];
$passwd=$_SESSION["cod"] ;
if (!$user) {
  header('location:index.php');
}
 ?>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 style="font-size:60px; text-align: center;" ><?php echo "Welcome ".$user."<br>";?></h3><br><br><br><br><br><br>
	            <div class="form-group">
                <button type="submit" class="form-control btn btn-primary submit px-3"><a href="class.php" style="color:black;">votre classe</a></button>
	            </div>
              <div class="form-group">
                <button type="submit" class="form-control btn btn-primary submit px-3"><a href="ajoutteset.php" style="color:black;"> ajouter un étudiant </a></button>
		      		</div>
              <div class="form-group">
                <button type="submit" class="form-control btn btn-primary submit px-3"><a href="delete.php" style="color:black;"> suprimer un étudiant </a></button>
		      		</div>
              <div class="form-group">
                <button type="submit" class="form-control btn btn-primary submit px-3"><a href="edit1.php" style="color:black;"> moifier un étudiant </a></button>
              </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	</body>
</html>
