<?php

/*var_dump($_GET['id']);*/

$id = $_GET['id'];



 include_once("include/BDD.php");

    $requete = $db->query(  "SELECT *
                            FROM sujet
                            WHERE sujet.id_sujet = $id"
                            );
    $requete_message = $db->query(  "SELECT *
                            FROM sujet, message
                            WHERE sujet.id_sujet = $id && message.id_sujet = $id
                            ORDER BY message.date"
                            );

    $result = $requete->fetch();
    
            

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>sujet</title>
</head>
<body>

    <header></header>

    <h1><?php echo $result['titre_sujet']?></h1>

    <?php
        while ($result = $requete_message->fetch()):
    ?>

            <p><?php echo $result['message_sujet']?></p>
            <p><?php echo $result['date']?></p>
            <p>------------</p>

    <?php
        endwhile;
    ?>
    
    <a href="ajout_message.php?id=<?php echo $id ?>"><p class="redirection">ajouté un message</p></a>
    <a href="index.php"><p class="redirection">revenir à la liste des sujet</p></a>
</body>
</html>