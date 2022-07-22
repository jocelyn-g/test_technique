<?php

if(!empty($_POST)){
    // Post n'est pas vide

    if(isset($_POST["titre"]) && !empty($_POST["titre"])){

        $titre = htmlspecialchars($_POST["titre"]);


        include_once("include/BDD.php");



        $sth = $db->prepare("
        INSERT INTO sujet(titre_sujet)
        VALUES(:titre)");


        $sth->bindParam(':titre',$titre);
        $sth->execute();

        $id = $db->lastInsertId();





    }else{
        die('le formulaire est incomplet');
    }
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Créer un sujet</title>
</head>
<body>

    <header></header>

    <?php
        if ((empty($_POST))):
    ?>
        <form method="POST">
            <table>
                <tr>
                    <td><label for="titre">votre titre</label></td>
                    <td><input type="text" name="titre"></td>
                </tr>
            </table>

            <input type="submit" class="bouton" value="créer votre sujet">
        </form>

        
        <a href="index.php"><p class="redirection">revenir à la liste des sujet</p></a>
    <?php
        endif;
    ?>

    <?php
        if ((!empty($_POST))):
    ?>
        <p><?php echo "création du sujet \"" . $_POST["titre"] . "\" réussi vous pouvez ecrire votre 1er message";?></p>
        <a href="ajout_message.php?id=<?php echo $id ?>"><p class="redirection">créer votre 1er message</p></a>
    <?php
        endif;
    ?>
    
</body>
</html>