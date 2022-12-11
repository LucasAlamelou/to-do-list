<?php
    require 'connection_pdo.php'
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link href="style/style.css" rel="stylesheet">
    <title>Tâche a effectué</title>
  </head>
  <body>
    <h1>Tâche à faire</h1>
    <div class="div-global">
        <form action="list.php" method="post">
            <div class="champ">
                <label for="do" class="input-label">Entrez la tâche à effectué : </label>
            </div>
            <div class="champ">
                <input type="text" name="do" id="do" class="input"/>
            </div>
            <div class="champ">
                <input type="submit" name="submit" class="btn-submit input" value="AJOUTER"/>
            </div>
        </form>
        <table class="table">
            <?php
            $todos = $pdo->query('Select * from list');
            ?>
            <?php
            //$reponse = $pdo->query('Select * from list');// On exécute une requête visant à récupérer les tâches
            while ($tache = $todos->fetch(PDO::FETCH_ASSOC)) { // On initialise une boucle
                ?>
                <tr class="tr">
                    <td class="td col-1" id=<?php echo $tache['id'] ?> ><?php echo $tache['do'] ?></td>
                    <td class="td link-a col-2"><a id="modify" class="link-a" href="modifyForm.php?id=<?php echo $tache['id']?>">Modifier</a></td>
                    <td class="td link-a col-3"><a id="delete" class="link-a" href="delete.php?id=<?php echo $tache['id']?>">Supprimer</a></td>
                    </tr>
                <?php
            }
            ?>
        </table>
    </div>

  </body>
</html>
