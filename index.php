<!DOCTYPE html>
<html>

	<head>
		<title>accueil</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="livreor.css"/>
	</head>

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
                        <li><a class="a" href="inscription.php">inscription</a></li>
                        <?php
                        }
                        else
                        {
                                echo $_SESSION['message'];


                        ?>
                        <li><a class="a" href="commentaire.php">ajouter un commentaire</a></li>    
                        <li><a class="a" href="profil.php">modifier profil</a></li>    
                        <form method="post" action="index.php">
                                <input type="submit" value="deconnexion" name="deco">   
                        </form>

                        <?php
                        }  
                        ?>
	                </ul>
                        </header>
                        

<h1>          
        <img class="lolimg" src="lol.jpg"   height="250" width="500"> <h1>


        <section class="accueil">
        <p>League of Legends est un jeu compétitif en ligne bourré d'action, qui mélange l'intensité trépidante des jeux de stratégie en temps réel avec des éléments de jeu de rôle.
        <br> Deux équipes de puissants champions, chacun avec un design et des compétences uniques, se heurtent de front sur de nombreux champs de bataille et dans des modes de jeu variés</p>


                                        </section>

                                        <article class= accueil>
                                        <p>

                                        notre jeu se compose de differentes ligne d'attaques la botlane qui se situe en bas la toplane la ligne du haut , la midle lane et la jungle.</p>

                <p> chaques champions appartiennent a une classe soit mage sois assassin soit tank soit support ou tireur </p></article>
                                        
                                        
                                        <h1 class ="titres">Notre forum consiste à ...</h1>

                                      <section class="accueil">  Partargez vos build et runes selon vos personnages,votre élo, donnez des tips au debutants qui commencent le jeu,<br>
                                      cela pourrait egalement permettre a des joueurs de se rencontrer pour jouer ensemble et creer de nouveaux liens...
                                        
                </section>
                <br>

                <img class="lol2" src="lol1.jpg">
                                        </html>