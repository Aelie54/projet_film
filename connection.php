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

    <div id="titre"><h1> <span class="grd_titre">Films</span> <br> cultes & incontournables</h1></div>

    <div id="boutons_nav">
    <a href="connexion.html">Mon Pseudo</a>
    <a href="connexion.html">Je m'identifie</a> 
    <a href="connexion.html">Je m'inscris</a> 
    <a href="connexion.html">Tous les films </a> 
    <a href="connexion.html">Liste des films par catégories</a> 
    </div>
        
</div>

<div id="main" >  

<div id="main_content">
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