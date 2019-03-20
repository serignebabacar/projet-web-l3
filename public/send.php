<?php
use Core\Auth\DBAuth;
$auth=new DBAuth(App::getInstance()->getDB());
$jeu_id=21;
$note=20;
$user_id=21;
$db=new PDO('mysql:host=localhost;dbname=projeWeb','root','');
    if(isset($_POST["jeu_id"],$_POST["note"]) && !empty($_POST["jeu_id"]) && !empty($_POST["note"])){
        $jeu_id=htmlspecialchars(trim($_POST["jeu_id"]));
        $note=htmlspecialchars(trim($_POST["note"]));
        $db->exec("INSERT INTO historique(id_user,id_jeu,note) values (,'$user_id','$jeu_id','$note')");
        echo " <span class='alert alert-success'>Vos donnes ont ete enovoyes qvec succes </span> ";
    
    }else{
        echo "<span class='alert alert-danger'>Veuillez remplir tous les champs </span>";
    }
?>