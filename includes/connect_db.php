<?php
try{
    $db= new PDO('mysql:host=localhost;dbname=projet','root','');
}catch(PDOException $e){
    die('Erreur : '.$e->getMessage());
}
?>