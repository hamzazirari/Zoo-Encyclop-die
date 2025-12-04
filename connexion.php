<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "zoo";

$con = new mysqli($servername,$username,$password,$dbname);

if($con->connect_error){
    die("erreur connexion ".$con->connect_error);
}
else
    echo"connexion reussi";
?>