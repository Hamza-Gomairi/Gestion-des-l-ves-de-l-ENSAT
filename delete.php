<?php session_start(); ?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
    button {
                background-color: #afaead;
                padding: 10px 32px;
                border-radius: 60px;
                font-size: 16px;
                }
        table {text-align: center;
                font-family: arial, sans-serif;
                width: 60%;}

        td, th {  text-align: center;   height: 50px;    font-size: 20px;  color: white;   }

  </style>
  <link rel="stylesheet" href="css1/style.css">
  </head>
  <body class="img js-fullheight" style="background-image: url(images/bg.jpg);">
    <?php
    $user=$_SESSION["name"];
    $passwd=$_SESSION["cod"] ;
    if (!$user) {
      header('location:index.php');
    }

    if (isset($_POST['submit'])&&isset($_POST ['CNE'])) {
      $CNE = $_POST ['CNE'];

    $con=mysqli_connect('localhost','root','','ensat');

    if($con){
      $sql = "SELECT * FROM eleves";
      $result = mysqli_query($con, $sql);
      if (mysqli_num_rows($result) > 0) {

             while($row = mysqli_fetch_array($result)) {
               if ($row[1]==$CNE) {
                 $ID_eleve=$row[0];
               }
               else {
                 header('location:delete.php');
               }
             }
           }
  $result = mysqli_query($con, "DELETE FROM eleves WHERE ID_eleve=$ID_eleve");
    }
    header('location:class.php');
  }
 ?>
  <h1 style="font-family:courier; text-align:center; color:white;">Suprimer un étudiant</h1><br><br><br><br><br><br><br><br><br><br><br><br>
<form  action="delete.php" method="post" >
<input type="text" class="form-control" placeholder="CNE" name="CNE" style="text-align: center" required><br>
<input type="submit"  class="form-control"  name="submit" style="text-align: center" value="Suprimer"/>
</form>
  </body>
</html>
