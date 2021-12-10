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
  <script src="./controller/film.js"></script> 
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
              echo "<p> Bonjour " . $_SESSION['user']['pseudo'] . "</p>"; } ?> 
    </div>
</div>

<div id="main_content" > 

    <div id="films_populaires">
    <h1></h1>
    <p></p>
    </div>

    <div id="films_categories">
    </div>

</div>

  <div id="cat"> 
    <!-- <h3> Genres :</h3> -->
    <p></p>
  </div>

<?php 

  $filmId =  $_GET['id'];         

?>

<script> 

  let FilmId = <?php echo $filmId ?> 

</script>



</html>