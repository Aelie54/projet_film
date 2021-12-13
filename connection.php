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
  <!-- <script src="script.js"></script>  -->
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

          <a href="http://localhost/projet_film/accueil.php">Films populaires du moment</a>
          <!-- <a href="http://localhost/projet_film/genres.php">Par genres</a> -->
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

<div id="boutons_nav2">
<button type="button"><a href="http://localhost/projet_film/genre.php?id=28">Action</a></button>
<button type="button"><a href="http://localhost/projet_film/genre.php?id=12">Aventure</a></button>
<button type="button"><a href="http://localhost/projet_film/genre.php?id=16">Animation</a></button>
<button type="button"><a href="http://localhost/projet_film/genre.php?id=35">Comédie</a></button>
<button type="button"><a href="http://localhost/projet_film/genre.php?id=80">Crime</a></button>
<button type="button"><a href="http://localhost/projet_film/genre.php?id=99">Documentaire</a></button>
<button type="button"><a href="http://localhost/projet_film/genre.php?id=18">Drame</a></button>
<button type="button"><a href="http://localhost/projet_film/genre.php?id=10751">Famille</a></button>
<button type="button"><a href="http://localhost/projet_film/genre.php?id=14">Fantastique</a></button>
<button type="button"><a href="http://localhost/projet_film/genre.php?id=36">Historique</a></button>
<button type="button"><a href="http://localhost/projet_film/genre.php?id=27">Horreur</a></button>
<button type="button"><a href="http://localhost/projet_film/genre.php?id=10402">Musique</a></button>
<button type="button"><a href="http://localhost/projet_film/genre.php?id=9648">Mystère</a></button>
<button type="button"><a href="http://localhost/projet_film/genre.php?id=10749">Romance</a></button>
<button type="button"><a href="http://localhost/projet_film/genre.php?id=878">Science Fiction</a></button>
<button type="button"><a href="http://localhost/projet_film/genre.php?id=10770">Téléfilm</a></button>
<button type="button"><a href="http://localhost/projet_film/genre.php?id=53">Thriller</a></button>
<button type="button"><a href="http://localhost/projet_film/genre.php?id=10752">FIlm de guerre</a></button>
<button type="button"><a href="http://localhost/projet_film/genre.php?id=37">Western</a></button>
</div>

<div id="main" >  

<div id="main_signup">
        <h1> Je me connecte </h1><br>

        <form action="./controller/login.php" method="post" id="form-control">
            <div>
                <label for="email">Email :</label>
                <input type="email" id="email" name="email">
            </div>
            <div>
                <label for="mot_de_passe">Password :</label>
                <input type="password" id="password" name="password" required="required">
            </div>
            <div>
            <small><?php  if( isset($_GET['error'])) { echo $_GET['error'];  } ?></small>
            </div>
            <div class="boutons_valider">
                <br><input class="Valider" type="submit" value="Valider">
            </div>
        </form>
</div>

</div>