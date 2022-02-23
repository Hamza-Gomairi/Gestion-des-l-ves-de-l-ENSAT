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
 ?>
  <h1 style="font-family:courier; text-align:center; color:white;">Ajouter un étudiant</h1><br><br><br>
  <form  action="edit.php" method="post" >

<h3 style="font-family:courier; text-align:center; color:white;">Entrer le CNE de l'étudiant à éditer</h3><br>
  <input type="text" class="form-control" placeholder="CNE" name="CNE1" style="text-align: center" required><br>
<h3 style="font-family:courier; text-align:center; color:white;">Saisir de nouvelles informations</h3><br>


<input type="text" class="form-control" placeholder="CNE" name="CNE" style="text-align: center" required><br>
<input type="text" class="form-control" placeholder="Nom"  name="NOM" style="text-align: center" required><br>
<input type="text" class="form-control" placeholder="PRENOM"  name="Prenom" style="text-align: center" required><br>
<input type="text" class="form-control" placeholder="Adresse"  name="Adresse" style="text-align: center" required><br>
<input type="text" class="form-control" placeholder="Ville"  name="Ville" style="text-align: center" required><br>
<input type="text" class="form-control" placeholder="Email"  name="Email" style="text-align: center" required><br>
<input type="file" class="form-control" placeholder="Photo"  name="Photo" style="text-align: center" required><br>
  <input type="submit"  class="form-control"  name="submit" style="text-align: center" value="enregistrer"/>


  </form>
  </body>
</html>
