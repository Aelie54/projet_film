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
  <script src="./controller/films.js"></script> 
  <title>Blog FIlms Cultes</title>
</head>
<body>

<div id="navbarre">    

    <div id="titre"><h1> <span class="grd_titre">Films</span> <br> cultes & incontournables</h1></div>

    <div id="boutons_nav">
    <a href="connexion.html">Mon Pseudo</a>
    <a href="connexion.html">Je m'identifie</a> 
    <a href="connexion.html">Je m'inscris</a> 
    <a href="connexion.html">Tous les films </a> 
    <a href="http://localhost/projet_film/accueil.php">Films populaires</a> 
    <a href="connexion.html">Choisir un genre</a> 
    </div>
        
</div>

<div id="main_content" > 

    <h1>Films Populaires :</h1>

    <div id="films_populaires">
      <ul></ul>
    </div>

</div>


