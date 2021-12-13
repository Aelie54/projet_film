<?php session_start();
//session_destroy();
?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="monblog" content="articles blog">
  <meta name="keywords" content="blog">
  <link rel="stylesheet" href="./asset/style2.css">
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

<body>

<div id="main_content" > 
    <div id="films_populaires">
      <ul></ul>
    </div>

</div>

<div id="cover">
  <form method="get" action="">
    <div class="tb">
      <div class="td"><input type="text" placeholder="Search" id="in"></div>
      <div class="td">
        <button onclick="getValue()" type="button">
          <div id="s-circle"><h3>Clic ici pour Rechercher</h3></div>
          <span></span>
        </button>
      </div>
    </div>
  </form>
</div>



<script src="./controller/search.js"></script> 
</body>