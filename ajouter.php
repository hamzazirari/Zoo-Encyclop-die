<?php 
include "connexion.php";

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $nom = $_POST['nom'];
    $type_alimentaire = $_POST['type_alimentaire'];
    $habitat = $_POST['habitat'];
    $image = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    move_uploaded_file($tmp_name, "images/".$image);
    
}

?>