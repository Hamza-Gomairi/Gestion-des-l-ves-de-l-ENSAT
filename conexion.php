<?php session_start(); ?>
<!DOCTYPE html>
<html >
  <head>
    <title></title>
  </head>
  <body>
    <?php

if (isset($_POST['submit'])&&isset($_POST['user'])&&isset($_POST ['passwd'])){

  $user=$_POST ['user'];
  $passwd=$_POST ['passwd'] ;
  $_SESSION["name"] =$user ;
$_SESSION["cod"] = $passwd;

  $con=mysqli_connect('localhost','root','','ensat');


  if($con){
          $sql = "SELECT * FROM comptes";
          $result = mysqli_query($con, $sql);


          if (mysqli_num_rows($result) > 0) {
          while($row = mysqli_fetch_assoc($result)){
                    if ($row["user"] == $user and $row["passwd"] == $passwd ){
                            header('location:homeprof.php');
                            break;
                    }
                    else {
                            echo "ce compte n'existe pas";
                    }
                    }
                    }
          }

          mysqli_close($con);

  }

else {
header('location:index.php');

}
  ?>
  </body>
</html>
