<?php 
include "connexion.php";

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $id = $_POST["id_animal"];

    $sql = "DELETE FROM animal WHERE id_animal = $id ";

    if($con->query($sql)== TRUE){
        header("Location: index.php");
    }else {
        echo"erreur";
    }
}


?>