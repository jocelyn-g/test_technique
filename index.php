<?php



 include_once("include/BDD.php");


    $requete = $db->query( "SELECT *
                        FROM sujet
                        Order by id_sujet"
                        );

    

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Liste des sujet</title>
</head>
<body>

        <header></header>

        <div class="crea_sujet">
            <a href="ajout_sujet.php">création d'un nouveau sujet</a>
        </div>
        <div>

            <table>
                <tr>
                    <th>titre sujet</th>
                    <th>ajout message</th>
                    <th>voir sujet</th>
                </tr>

                <?php
                    while ($result = $requete->fetch()):
                ?>
                <tr>
                    <td><?php echo $result['titre_sujet']?></td>
                    <td><a href="ajout_message.php?id=<?php echo $result['id_sujet'] ?>">ajouté un message</a></td>
                    <td><a href="sujet.php?id=<?php echo $result['id_sujet'] ?>">voir les messages</a></td>
                </tr>
                <?php
                    endwhile;
                ?>

            </table>

        </div>

    
</body>
</html>