<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <title>class</title>
  <style>
  body {
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  button {
              background-color: #fbceb5;
              padding: 10px 32px;
              border-radius: 10px;
              font-size: 16px;
              }
      table {
              font-family: arial, sans-serif;
              border-collapse: collapse;
              width: 80%;
              background-color: #a6a6a5;

              }

      td, th {
              border: 1px solid #dddddd;
              text-align: left;
              padding: 8px;
              }

      tr:nth-child(even) {
              background-color: #dddddd;

              }
</style>
</head>
<body class="img js-fullheight" style="background-image: url(images/bg.jpg);">
  <?php
  $user=$_SESSION["name"];
  $passwd=$_SESSION["cod"] ;
  if (!$user) {
    header('location:index.php');
  }
   ?>
  <h1 style="font-family:courier; text-align:center; color:white;">Votre classe</h1><br>
  <br><br>
  <?php


  $con=mysqli_connect('localhost','root','','ensat');

  if($con){
          $sql = "SELECT * FROM eleves";
          $result = mysqli_query($con, $sql);
          echo "<table>";
          echo"<tr>";
          echo"<th>CNE</th>";
          echo"<th>Nom</th>";
          echo"<th>Prenom</th>";
          echo"<th>Adresse</th>";
          echo"<th>Ville</th>";
          echo"<th>Email</th>";
          echo"<th>Photo</th>";
          echo"<th>etat</th>";
          echo"</tr>";
          if (mysqli_num_rows($result) > 0) {

                 while($row = mysqli_fetch_array($result)) {
                   echo "<tr>";
                   for($i=1;$i<7;$i++){
                     echo "<td>";
                     echo "$row[$i]";
                     echo "</td>";
                   }
                   echo "<td>";
                   echo '<img src="'.$row[7].'"  width="200" height="200"/>';
                   echo "</td>";
                   echo "<td>";
                   echo "$row[8]";
                   echo "</td>";
                   echo "</tr>";

                }
  }
  echo "</table>";
  }
  ?>
  <br><br><br>
  <button type="submit" > <a href="homeprof.php" style="color:black;">HOME</a></button>
  <button type="submit" > <a href="deconnexion.php" style="color:black;">Deconnexion</a></button>
</body>
</html>
