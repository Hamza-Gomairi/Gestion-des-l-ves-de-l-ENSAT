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

  if (isset($_POST['submit'])&&isset($_POST ['CNE'])&&isset($_POST ['NOM'])&&isset($_POST ['Prenom'])&&isset($_POST ['Adresse'])&&isset($_POST ['Ville'])&&isset($_POST ['Email'])&&isset($_POST ['Photo'])) {
    $CNE = $_POST ['CNE'];
    $NOM = $_POST ['NOM'];
    $Prenom = $_POST ['Prenom'];
    $Adresse= $_POST ['Adresse'];
    $Ville = $_POST ['Ville'];
    $Email = $_POST ['Email'];
    $Photo = $_POST ['Photo'];

  $con=mysqli_connect('localhost','root','','ensat');

  if($con){
$result=mysqli_query($con,"INSERT INTO `eleves` (`ID_eleve`, `CNE`, `Nom`, `Prenom`, `Adresse`, `Ville`, `email`, `Photo`, `etat`) VALUES
(NULL, '$CNE', '$NOM', '$Prenom', '$Adresse', '$Ville', '$Email', '$Photo', 0)");
  }
  header('location:class.php');
}
  ?>
</body>
</html>
