<html>
<link rel="stylesheet" href="livreor.css"/>

<body class="bodyacc">

<header>

<ul class="menu">

<?php
session_start();

        if(isset($_POST['deco']))
        {
                unset($_SESSION['login']);
                unset($_SESSION['password']);
        }
        

        

        if(!isset($_SESSION['login']))
        {
        ?>
        <li><a class="a" href="connexion.php">connexion</a></li>
        <li><a class="a" href="formulaire.php">inscription</a></li>
        <?php
        }
        else
        {
                echo $_SESSION['message'];


        ?>
        <li><a class="a" href="commentaire.php">ajouter un commentaire</a></li>    
        <li><a class="a" href="modifierprofil.php">modifier profil</a></li>  
                <li><a class="a" href="index.php">accueil</a></li>    
  
        <form method="post" action="index.php">
                <input type="submit" value="deconnexion" name="deco">   
        </form>

        <?php
        }  
        ?>
    </ul>
        </header>
        
<?php


    $db=mysqli_connect("localhost","root","","livreor");
    $requete="SELECT login, commentaires, date FROM utilisateurs, commentaires WHERE id_utilisateur=utilisateurs.id";
    $query=mysqli_query($db, $requete);

   ?>
   <table class="tableau">
        <tr>
        <th class="tableauth">Utilisateur(s)</th>
        <th class="tableauth">commentaires</th>
        <th class="tableauth">date</th>

</tr>


    <?php
    
    while (    $date=mysqli_fetch_array($query  ))

    {?>

        <tr class="tableautr">
            <td><?php

            echo $date['login'];
            ?> </td>


            <td><?php

            echo $date['commentaires'];
            ?> </td>
            <td><?php

echo $date['date'];
?> </td>

            </tr>
            <?php

    }
        





?>
</html>