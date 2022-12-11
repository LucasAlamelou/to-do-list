<?php require "connection_pdo.php"
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="style/style.css" rel="stylesheet">
    <title>Tâche à modifié</title>
</head>
<body>
<h1>Modifier votre tâche</h1>
<?php if ( isset( $_GET['id'] ) ) {
    $id = $_GET['id'];
    $sql = /** @lang text */ "SELECT do FROM `list` WHERE id='".$id."'";
    $element = $pdo->query($sql);
    while ($donnees = $element->fetch())
    {
       $monElement = "$donnees[do]";
    }
}
?>
<form action="modify.php" method="post">
    <input type="hidden" name="id" id="id" value="<?php echo $id ?>" />
    <label for="modifyDo" class="input-label">Modifier la tâche : </label>
    <input type="text" name="modifyDo" id="modifyDo" class="input" value="<?php echo $monElement?>"/>
    <input type="submit" name="submit" class="btn-submit input"/>
</form>
</body>
</html>