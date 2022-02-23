<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Login 10</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<link rel="stylesheet" href="css1/style.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(images/bg.jpg);" >
    <?php

if (isset($_POST['submit'])&&isset($_POST['user'])&&isset($_POST ['passwd'])){

  $user=$_POST ['user'];
  $passwd=$_POST ['passwd'] ;


  $con=mysqli_connect('localhost','root','','ensat');


  if($con){
          $sql = "SELECT * FROM comptes";
          $result = mysqli_query($con, $sql);


          if (mysqli_num_rows($result) > 0) {
          while($row = mysqli_fetch_assoc($result)){
                    if ($row["user"] == $user and $row["passwd"] == $passwd ){
                            header('location:homeprof.php');
                            $_SESSION["name"] =$user ;
                          $_SESSION["cod"] = $passwd;
                            break;
                    }
                    else {
                            echo " <h5 style='color:green'> failed try again ! </h5> ";
                    }
                    }
                    }
          }

          mysqli_close($con);

  }

  ?>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Have an account?</h3><br><br><br><br><br><br><br>
		      	<form action="login.php" method="post" class="signin-form">
		      		<div class="form-group">
		      			<input type="text" class="form-control" placeholder="user name" name="user" required>
		      		</div>
	            <div class="form-group">
	              <input  type="password" class="form-control" placeholder="password" name="passwd" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            <div class="form-group">
                <input type="submit"  class="form-control btn btn-primary submit px-3"  name="submit"  value="Sign In"/>
	            </div>
	          </form>
		      </div>
				</div>
			</div>
		</div>
	</section>


	</body>
</html>
