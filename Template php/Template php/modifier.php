<!DOCTYPE html>
<html lang="en">
<?php
  include('connexion.php');
  if(isset($_POST['button'])){

    $lien = $_GET['id'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $age =($_POST['age']);

    $requete = "UPDATE user_tp SET nom ='$nom', prenom ='$prenom', age='$age' where id = '$lien' ";
    $stmt = $bdd->query($requete);
  }
 ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="form">
        <a href="index.php" class="back_btn"><img src="images/back.png"> Retour</a>
        <h2>Modifier l'employé : <?= $row['nom'] ?> </h2>
        <p class="erreur_message">
        </p>
        <form action="" method="POST">
            <label>Nom</label>
            <input type="text" name="nom" value="">
            <label>Prénom</label>
            <input type="text" name="prenom" value="">
            <label>âge</label>
            <input type="number" name="age" value="">
            <input type="submit" value="Modifier" name="button">
        </form>
    </div>
</body>

</html>
