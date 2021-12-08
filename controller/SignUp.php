<?php
session_start();
require_once("../config/mysql.php");

if ( //le formulaire est-il bien renseigner?
    isset(
        $_POST['pseudo'], 
        $_POST['email'],
        $_POST['password'],
        $_POST['comfirm_password'],
        $_POST['birthday']
    )
){
    
    $isValid = checkSignUp(// si oui, on donne un nom aux inputs
        $_POST['pseudo'],
        $_POST['email'],
        $_POST['password'],
        $_POST['comfirm_password'],
        $_POST['birthday']
    );
        

  if ($isValid['exist']) {
    header('Location: http://localhost/projet_film/');
    
    return ;
    }

    header('Location: http://localhost/projet_film/');

    return;
}

$error = [
    "message" => "",
    "exist" => false
];

function checkSignUp($pseudo, $email, $password, $comfirm_password, $birthday)
{
    global $error;//on securise les données renseignés dans les inputs
    $pseudo =  htmlspecialchars(strip_tags($pseudo));
    $email =  htmlspecialchars(strip_tags($email));
    $password =  htmlspecialchars(strip_tags($password));
    $comfirm_password =  htmlspecialchars(strip_tags($comfirm_password));
    $birthday =  htmlspecialchars(strip_tags($birthday));

    
    if ( //si un des champs est renseigné par du vide
        empty($pseudo) || empty($email) || empty($password)
        || empty($comfirm_password) || empty($birthday)
    ) 
        {//on envoie un message d'erreur
        $error["message"] .= "Veuillez remplir tous les champs. Merci ! </br>";
        $error["exist"] = true;

        return $error;
    }
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { //l'email est-il au format email?
        $error["message"] .= "Saisissez un adresse email valide";
        $error["exist"] = true;

        return $error;
    }
    
    $password = passwordHash($password);//on hache le mdp

    addUser($pseudo, $email, $password, $birthday);//on ajoute les nouvel utilisateur

    return $error;
}

//fonction permettant d'ajouter le nouvel utilisateur dans la db
function addUser($pseudo, $email, $password, $birthday)
{
    global $connexion;
    global $error;

    $query = $connexion->prepare("INSERT INTO `user`(`pseudo`, `email`, `password`, `birthday`)  VALUES (:pseudo, :email, :pwd, :birthday);");
    $response = $query->execute(["pseudo" => $pseudo,  "email" => $email, "pwd" => $password, "birthday" => $birthday]);
    if (!$response) {
        $error["message"] .= "Une erreur s'est produite durant l'insertion";
        $error["exist"] = true ;
    }
}


function passwordHash($password) { //fonction pour hacher le password
    $hash_password = password_hash($password, PASSWORD_DEFAULT);

    return $hash_password;
}?>