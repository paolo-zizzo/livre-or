<html>
<link rel="stylesheet" href="livreor.css"/>

<body class="form">
<div class="form-style-8">
    
    
<h2>connexion:</h2>    

<form class="formulaire" name="inscription" method="post" action="connexion.php">
Entrez votre pseudo : <input type="text" required  name="login"/> <br/>
        Entrez votre mot de passe : <input type="password" required name="password"/><br/>

        <input type="submit" name="valider" value="OK"/>
    </form>

    <?php

if(isset ($_POST['valider']))
{
    

    session_start();
    $db=mysqli_connect("localhost","root","","livreor");
    $login=$_POST['login']; 
    $requete1="SELECT * FROM `utilisateurs`WHERE login='$login'";
    $query= mysqli_query ($db,$requete1);
    $resultat=mysqli_num_rows($query);

    
    
        if ($resultat==0){
        echo "mot de passe ou login incorrect";
    }
    else
    {
        $_SESSION['message']="bienvenue :)";

    $_SESSION['login']=$login;
    $_SESSION['password']=$_POST['password'];
    header('location: index.php');
}

}















?>

