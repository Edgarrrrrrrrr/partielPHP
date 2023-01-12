<!DOCTYPE html>
<html lang="en">
<?php
    include('connexion.php');

    $requete = "SELECT * FROM user_tp";
    $stmt = $bdd->query($requete);

    if($stmt === false){
      die("Erreur");
   }

  ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Utilisateurs</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <a href="ajouter.php" class="Btn_add"> <img src="images/plus.png"> Ajouter</a>

        <table>

            <tr id="items">
                <th>Nom</th>
                <th>Prénom</th>
                <th>Age</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr
                <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
                  <tr id="items">
                    <th><?php echo htmlspecialchars($row['nom']); ?></th>
                    <th><?php echo htmlspecialchars($row['prenom']); ?></th>
                    <th><?php echo htmlspecialchars($row['age']); ?></th>
                    <th><a href="modifier.php?id='.$row['id'].'">Modifier </a></th>
                    <th><a href="supprimer.php?id='.$row['id'].'" > Supprimer </a></th>
                  </tr
            ></t
            <?php endwhile; ?>
        </table>




    </div>
</body>

</html>
