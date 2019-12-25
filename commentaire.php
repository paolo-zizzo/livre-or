<html>
<link rel="stylesheet" href="livreor.css"/>

<body class="form">
<div class="form-style-8">
    
<?php
session_start();
$login=$_SESSION['login'];
$db=mysqli_connect("localhost","root","","livreor");
$requeteid="SELECT id FROM utilisateurs WHERE login='$login'";
$query=mysqli_query($db, $requeteid);
$id=mysqli_fetch_array($query);


?>



<h2>ajoutez vos commentaires:</h2>    

<form class="formulaire1" name="inscription" method="post" action="commentaire.php">
    
      votre commentaire: <textarea name="message"></textarea>
      <input type="file" id="file" accept="image/png, image/jpeg">

      <input type="submit" name="valider" value="OK"/>
      </form>
      <?php

      if(isset($_POST['valider']))
{
    

 $message=$_POST['message'];
 $id=$id['id'];
 $requete="INSERT INTO `commentaires` (`id`, `commentaires`, `id_utilisateur`, `date`) VALUES (NULL, '$message', '$id', CURRENT_TIMESTAMP())";
 mysqli_query($db, $requete);
 header('location: livre-or.php');
}

 ?>
             </html>
