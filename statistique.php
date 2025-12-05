<?php
include "connexion.php";

// Compter les Carnivores
$sql_carnivore = "SELECT COUNT(*) as total FROM animal WHERE type_alimentaire = 'Carnivore'";
$result_carnivore = $con->query($sql_carnivore);
$row_carnivore = $result_carnivore->fetch_assoc();
$countCarnivore = $row_carnivore['total'];

// Compter les Herbivores
$sql_herbivore = "SELECT COUNT(*) as total FROM animal WHERE type_alimentaire = 'Herbivore'";
$result_herbivore = $con->query($sql_herbivore);
$row_herbivore = $result_herbivore->fetch_assoc();
$countHerbivore = $row_herbivore['total'];

// Compter les Omnivores
$sql_omnivore = "SELECT COUNT(*) as total FROM animal WHERE type_alimentaire = 'Omnivore'";
$result_omnivore = $con->query($sql_omnivore);
$row_omnivore = $result_omnivore->fetch_assoc();
$countOmnivore = $row_omnivore['total'];
?>