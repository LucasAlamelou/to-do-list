<?php
require 'redirect.php';
require 'connection_pdo.php';
if ( isset( $_GET['id'] ) ) {
        $delete = $_GET['id'];
        $sql ='DELETE FROM list WHERE id = ?';
        $pdo->prepare($sql)->execute([$delete]);
        Redirect('/to-do-list',false);
}

