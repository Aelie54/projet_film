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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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


<div id="main_content" > 

    <h1>Liste des genres</h1>
      
    <ul>

    <a href="http://localhost/projet_film/genre.php?id=28"><li>Action</li></a>
    <a href="http://localhost/projet_film/genre.php?id=12"><li>Aventure</li></a>
    <a href="http://localhost/projet_film/genre.php?id=16"><li>Animation</li></a>
    <a href="http://localhost/projet_film/genre.php?id=25"><li>Comedie</li></a>
    <a href="http://localhost/projet_film/genre.php?id=80"><li>Crime</li></a>
    <a href="http://localhost/projet_film/genre.php?id=99"><li>Documentaire</li></a>
    <a href="http://localhost/projet_film/genre.php?id=18"><li>Drame</li></a>
    <a href="http://localhost/projet_film/genre.php?id=10751"><li>Famille</li></a>
    <a href="http://localhost/projet_film/genre.php?id=14"><li>Fantastique</li></a>
    <a href="http://localhost/projet_film/genre.php?id=36"><li>Historique</li></a>
    <a href="http://localhost/projet_film/genre.php?id=27"><li>Horreur</li></a>
    <a href="http://localhost/projet_film/genre.php?id=10402"><li>Musique</li></a>
    <a href="http://localhost/projet_film/genre.php?id=9648"><li>Mystère</li></a>
    <a href="http://localhost/projet_film/genre.php?id=10749"><li>Romance</li></a>
    <a href="http://localhost/projet_film/genre.php?id=878"><li>Science Fiction</li></a>
    <a href="http://localhost/projet_film/genre.php?id=10770"><li>Téléfilm</li></a>
    <a href="http://localhost/projet_film/genre.php?id=53"><li>Thriller</li></a>
    <a href="http://localhost/projet_film/genre.php?id=10752"><li>FIlm de guerre</li></a>
    <a href="http://localhost/projet_film/genre.php?id=37"><li>Western</li></a>

      </ul>

</div>
