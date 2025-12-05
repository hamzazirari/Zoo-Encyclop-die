<?php 
include "connexion.php";

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $nom = $_POST['nom'];
    $type_alimentaire = $_POST['type_alimentaire'];
    $habitat_id = $_POST['habitat'];
    $image = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];

    move_uploaded_file($tmp_name, "images/".$image);

    $sql = "INSERT INTO animal (nom_animal, type_alimentaire, image , habitat_id)
    VALUES ('$nom','$type_alimentaire','$image','$habitat_id')";

    //verifier 

    if($con->query($sql)===TRUE){
        echo"Animal ajoute avec succes !";
        header("Location: index.php");
    }
    else{
        echo"ERREUR";
    }
    
}

?>


