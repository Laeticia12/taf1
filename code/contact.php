<?php
$_servername="localhost";
$_username='root';
$_password='';
$_dbname='utilisateur';
try{
    $con = new PDO("mysql:host=".$_servername.";dbname=".$_dbname.";",$_username,$_password);
}
catch(PDOExeption $e){
    die("erreur: ".$e->getMessage());
}


if (isset($_POST['ok'])) {
    
    $_nom=$_POST['nom'];
    $_prenom=$_POST['prenom'];
    $_email=$_POST['email'];
    $_message=$_post['message'];
    # code...
}


?>
