<?php{
$_servername="localhost";
$_usename='root';
$_password='root'

$_bdd->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_exeption)
}
catch(PDOExeption $e){
    echo"erreur": "$e->getMessage"
}


if (isset ($_POST['ok'])) {
    $_nom=$_POST['nom'];
    $_prenom=$_POST['prenom'];
    $_email=$_POST['email'];
    $_message=$_post['message']
    # code...
}


?>