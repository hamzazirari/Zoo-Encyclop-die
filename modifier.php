<?php
include "connexion.php";

if(isset($_POST["id_animal"]) && !isset($_POST["nom_mod"])){
    
    $id = $_POST["id_animal"];
    
    // Récupérer infos animal
    $sql = "SELECT * FROM animal WHERE id_animal = $id";
    $result = $con->query($sql);
    $animal = $result->fetch_assoc();
    
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier Animal</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">

<div class="container mx-auto p-8 max-w-md">
    <div class="bg-white rounded-lg shadow-md p-6">
        
        <h2 class="text-2xl font-bold text-green-500 mb-6">Modifier un Animal</h2>
        
        <form method="post" enctype="multipart/form-data">
            
            <input type="hidden" name="id_animal" value="<?= $animal['id_animal'] ?>">
            
            <!-- Nom -->
            <div class="mb-4">
                <label class="block mb-2">Nom :</label>
                <input type="text" name="nom_mod" value="<?= $animal['nom_animal'] ?>" 
                       class="w-full border px-3 py-2 rounded" required>
            </div>
            
            <!-- Type -->
            <div class="mb-4">
                <label class="block mb-2">Type alimentaire :</label>
                <select name="type_alimentaire_mod" class="w-full border px-3 py-2 rounded" required>
                    <option value="Carnivore" <?php if($animal['type_alimentaire'] == 'Carnivore') echo 'selected'; ?>>Carnivore</option>
                    <option value="Herbivore" <?php if($animal['type_alimentaire'] == 'Herbivore') echo 'selected'; ?>>Herbivore</option>
                    <option value="Omnivore" <?php if($animal['type_alimentaire'] == 'Omnivore') echo 'selected'; ?>>Omnivore</option>
                </select>
            </div>
            
            <!-- Habitat -->
            <div class="mb-4">
                <label class="block mb-2">Habitat :</label>
                <select name="habitat_mod" class="w-full border px-3 py-2 rounded" required>
                    <option value="1" <?php if($animal['habitat_id'] == 1) echo 'selected'; ?>>Savane Africaine</option>
                    <option value="2" <?php if($animal['habitat_id'] == 2) echo 'selected'; ?>>Ocean</option>
                    <option value="3" <?php if($animal['habitat_id'] == 3) echo 'selected'; ?>>Jungle</option>
                    <option value="4" <?php if($animal['habitat_id'] == 4) echo 'selected'; ?>>Désert</option>
                </select>
            </div>
            
            <!-- Image actuelle -->
            <div class="mb-4">
                <label class="block mb-2">Image actuelle :</label>
                <img src="images/<?= $animal['image'] ?>" class="w-32 h-32 object-cover rounded">
            </div>
            
            <!-- Nouvelle image -->
            <div class="mb-4">
                <label class="block mb-2">Changer l'image (optionnel) :</label>
                <input type="file" name="image_mod" class="w-full border px-3 py-2 rounded">
            </div>
            
            <!-- Boutons -->
            <button type="submit" class="w-full bg-orange-500 text-white py-2 rounded hover:bg-orange-600 mb-2">
                Modifier
            </button>
            
            <a href="index.php" class="block text-center w-full bg-gray-500 text-white py-2 rounded hover:bg-gray-600">
                Annuler
            </a>
            
        </form>
        
    </div>
</div>

</body>
</html>

<?php
    exit;
}

// Étape 2 : Si on soumet le formulaire de modification
if(isset($_POST["nom_mod"])){
    
    $id = $_POST["id_animal"];
    $nom_mod = $_POST["nom_mod"];
    $type_alimentaire_mod = $_POST["type_alimentaire_mod"];
    $habitat_mod = $_POST["habitat_mod"];
    
    // Récupérer l'ancienne image
    $result = $con->query("SELECT image FROM animal WHERE id_animal = $id");
    $row = $result->fetch_assoc();
    $ancienne_image = $row['image'];
    
    // Vérifier si nouvelle image
    if(!empty($_FILES['image_mod']['name'])){
        $image_mod = $_FILES['image_mod']['name'];
        move_uploaded_file($_FILES['image_mod']['tmp_name'], "images/".$image_mod);
    } else {
        $image_mod = $ancienne_image;
    }
    
    // UPDATE
    $sql = "UPDATE animal 
            SET nom_animal = '$nom_mod',
                type_alimentaire = '$type_alimentaire_mod',
                habitat_id = '$habitat_mod',
                image = '$image_mod'
            WHERE id_animal = $id";
    
    if($con->query($sql)){
        header("Location: index.php");
        exit;
    } else {
        echo "Erreur : " . $con->error;
    }
}
?>