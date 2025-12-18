<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "zoo";

$con = mysqli_connect($servername,$username,$password,$dbname);

if(!$con){
    die("erreur connexion ");
}
else
    echo"connexion reussi";
?>