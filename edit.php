<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <title>class</title>
  <style>
      table {
              font-family: arial, sans-serif;
              border-collapse: collapse;
              width: 100%;
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
<body>
  <?php

  $user=$_SESSION["name"];
  $passwd=$_SESSION["cod"] ;
  if (!$user) {
    header('location:index.php');
  }


  if (isset($_POST['submit'])&&isset($_POST ['CNE1'])&&isset($_POST ['CNE'])&&isset($_POST ['NOM'])&&isset($_POST ['Prenom'])&&isset($_POST ['Adresse'])&&isset($_POST ['Ville'])&&isset($_POST ['Email'])&&isset($_POST ['Photo'])) {
    $CNE1 = $_POST ['CNE1'];
    $CNE = $_POST ['CNE'];
    $NOM = $_POST ['NOM'];
    $Prenom = $_POST ['Prenom'];
    $Adresse= $_POST ['Adresse'];
    $Ville = $_POST ['Ville'];
    $Email = $_POST ['Email'];
    $Photo = $_POST ['Photo'];

  $con=mysqli_connect('localhost','root','','ensat');

  if($con){
    $sql = "SELECT * FROM eleves";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {

           while($row = mysqli_fetch_assoc($result)) {
             if ($row['CNE']==$CNE1) {
               $ID_eleve=$row['ID_eleve'];

             }
             else {
                   header('location:edit1.php');
             }
           }
         }

         $update="UPDATE eleves SET CNE='$CNE',Nom='$NOM',Prenom='$Prenom',Adresse='$Adresse',Ville='$Ville',email='$Email' ,Photo='$Photo' WHERE ID_eleve='$ID_eleve'";
         $result=mysqli_query($con,$update);
         header('location:class.php');
    }
  }

  ?>
</body>
</html>
