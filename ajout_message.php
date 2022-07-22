<?php

/*var_dump($_GET['id']);*/

$id = $_GET['id'];

if(!empty($_POST)){
    // Post n'est pas vide

    if(isset($_POST["contenu"]) && !empty($_POST["contenu"])){

        $contenu = htmlspecialchars($_POST["contenu"]);
        $id_sujet = $_POST["id_sujet"];

        

        include_once("include/BDD.php");


        $sth = $db->prepare("
        INSERT INTO message(message_sujet, id_sujet)
        VALUES(:content, :id_sujet)");


        $sth->bindParam(':content',$contenu);
        $sth->bindParam(':id_sujet',$id_sujet);
        $sth->execute();



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
    <title>ajout message</title>
</head>
<body>

    <header></header>

    <?php
        if ((empty($_POST))):
    ?>
        <form method="POST">
            <table>
                <tr>
                    <td><label for="contenu">Votre Message</label></td>
                    <td><textarea name="contenu" id="contenu" cols="25" rows="20"></textarea></td>
                </tr>

                <tr class="invisible">
                    <td><label for="contenu">id</label></td>
                    <td><input type="number" name="id_sujet" value="<?php echo $id ?>"></td>
                </tr>
            </table>
            <input type="submit" class="bouton" value="envoyer votre message">
        </form>
        
        <a href="index.php"><p class="redirection">revenir à la liste des sujet</p></a>
    <?php
        endif;
    ?>

    <?php
        if ((!empty($_POST))):
    ?>
    <p><?php echo "création du commentaire \"" . $_POST["contenu"] . "\" réussi vous pouvez consulter les commentaire de ce sujet";?></p>
    <a href="sujet.php?id=<?php echo $id ?>"><p class="redirection">voir les commentaires</p></a>
    <?php
        endif;
    ?>

    
</body>
</html>