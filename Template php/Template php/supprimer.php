<?php
  //connexion a la base de données
    include('connexion.php');
    $lien = $_GET['id'];

    echo $_GET['id'];
    $requete = 'DELETE FROM user_tp WHERE id="'.$lien.'"';
    $stmt = $bdd->query($requete);
    $monUrl ="index.php"
    header('Location: index.php');
    exit();
   ?>



  //récupération de l'id dans le lien

  //requête de suppression

  //redirection vers la page index.php
