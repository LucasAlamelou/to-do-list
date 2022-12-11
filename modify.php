<?php
require 'redirect.php';
require 'connection_pdo.php';
if ( isset( $_POST['submit'] ) ) {
    $id = $_POST['id'];
    $modifyDo = $_POST['modifyDo'];
    echo $id;
    echo $modifyDo;
    $sql ='UPDATE list SET do = ? WHERE id = ?';
    $pdo->prepare($sql)->execute([$modifyDo, $id]);
    Redirect('/to-do-list',false);
}
?>
