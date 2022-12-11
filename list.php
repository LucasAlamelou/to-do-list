<?php
require 'redirect.php';
   // Vérifier si le formulaire est soumis 
   if ( isset( $_POST['submit'] ) ) {
       /*Connexion base de données local*/
       try {
           $pdo = new PDO('mysql:host=localhost:8889;dbname=ToDoList', 'root', 'root');
           $do = $_POST['do'];

           $sql = "INSERT INTO list (id,do) VALUES (UUID(),?)";
           $pdo->prepare($sql)->execute([$do]);
           Redirect('/to-do-list');
       } catch (PDOException $e) {
           echo $e;
       }

  }