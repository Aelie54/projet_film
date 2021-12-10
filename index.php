<?php session_start();
//session_destroy();
?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="monblog" content="articles blog">
  <meta name="keywords" content="blog">
  <link rel="stylesheet" href="./asset/style.css">
  <script src="script.js"></script> 
  <title>Blog FIlms Cultes</title>
</head>
<body>

<div id="navbarre">    

    <div id="titre">
      <h1> <span class="grd_titre">Films</span> <br> cultes & incontournables</h1>
    </div>

    <div id="boutons_nav">

        <?php 
          if(!isset($_SESSION['user']['pseudo'] )){
              echo '<a href="http://localhost/projet_film/connection.php">login</a>' ; 
              echo '<a href="http://localhost/projet_film/">Signup</a>'; 
              } ?> 

          <a href="http://localhost/projet_film/accueil.php">Tous les films populaires</a>
          <a href="http://localhost/projet_film/genres.php">Par genres</a>
          <a href="http://localhost/projet_film/search.php">Rechercher</a>
          <a href="http://localhost/projet_film/accueil.php">Accueil</a>
              
          <?php
          if(isset($_SESSION['user']['pseudo'] )){
            echo '<a href="http://localhost/projet_film/controller/logout.php">Log out</a>' ; 
          } ?> 

          <?php
          if(isset($_SESSION['user']['pseudo'] )){
              echo "<p>Bonjour " . $_SESSION['user']['pseudo'] . "</p>"; } ?> 
    </div>
</div>


<div id="main" >  

<div id="main_signup"> 
        <h1> Je m'inscris </h1><br>

        <form action="./controller/SignUp.php" method="post">
        <div>
        <label for="pseudo">Pseudo </label>
        </div>
        <div>
          <input type="text" name="pseudo" id="pseudo" autofocus required /><br><br>
        </div>
        <div>
          <label for="email">Email</label>
        </div>
        <div>
          <input type="email" name="email" id="email" /><br><br>
        </div>
        <div>
          <label for="password">Mot de passe </label>
        </div>
        <div>
          <input type="password" name="password" id="password" /><br><br>
        </div>
        <div>
          <label for="comfirm_password">Confirmer le mot de passe : </label>
        </div>
        <div>
          <input type="password" name="comfirm_password" id="comfirm_password" /><br><br>
        </div>
        <div class="birthday">
        <label for="start">Date de Naissance :</label><br>
        <input type="date" id="birthday" name="birthday" min="1921-01-01" ><br><br>
        </div>
        <!-- <div class="checkbox">
        <input type="checkbox" id="scales" name="scales"><label for="scales">Contenus 18 ans et +</label><br><br>
        </div> -->
        <div id="signup_button">
          <input type="submit" value="S'inscrire" />
        </div>
    </form>

</div>

</div>