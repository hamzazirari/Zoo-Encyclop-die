<?php 
include "connexion.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoo Kids - Gestion Simple</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 min-h-screen">
    
    <!-- HEADER -->
    <header class="bg-blue-400 shadow-md">
        <div class="container mx-auto px-4 py-6">
            <h1 class="text-3xl font-bold text-white text-center">🦁 Zoo Kids</h1>
        </div>
    </header>

    <div class="container mx-auto px-4 py-8 max-w-7xl">

        <!-- SECTION FILTRES -->
        <div class="bg-white rounded-xl shadow-md p-6 mb-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">🔍 Filtrer les animaux</h2>
            
            <!-- PHP: Formulaire de filtrage - récupère les valeurs avec $_GET['habitat'] et $_GET['alimentation'] -->
            <form action="index.php" method="GET" class="flex flex-wrap gap-4 items-end">
                
                <!-- Filtre par habitat -->
                <div class="flex-1 min-w-[200px]">
                    <label class="block text-gray-700 font-medium mb-2">Habitat :</label>
                    <!-- PHP: Ajoute selected="selected" si $_GET['habitat'] == valeur -->
                    <select name="habitat" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                        <option value="">Tous les habitats</option>
                        <option value="savane">Savane</option>
                        <option value="jungle">Jungle</option>
                        <option value="desert">Désert</option>
                        <option value="ocean">Océan</option>
                    </select>
                </div>

                <!-- Filtre par type alimentaire -->
                <div class="flex-1 min-w-[200px]">
                    <label class="block text-gray-700 font-medium mb-2">Type alimentaire :</label>
                    <!-- PHP: Ajoute selected="selected" si $_GET['alimentation'] == valeur -->
                    <select name="alimentation" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                        <option value="">Tous les types</option>
                        <option value="carnivore">Carnivore</option>
                        <option value="herbivore">Herbivore</option>
                        <option value="omnivore">Omnivore</option>
                    </select>
                </div>

                <!-- Bouton Afficher -->
                <div>
                    <button type="submit" class="bg-blue-500 text-white font-medium px-8 py-2 rounded-lg hover:bg-blue-600 transition">
                        Afficher
                    </button>
                </div>
            </form>
        </div>

        <!-- SECTION HABITATS -->
        <div class="flex justify-center mb-8">
    <h2 class="text-2xl font-bold text-gray-800">🏞️ Nos Habitats</h2>
</div>
            
            <!-- PHP: Boucle foreach pour afficher les habitats depuis la base de données -->
            <!-- Exemple: foreach($habitats as $habitat) { -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                
                <!-- Carte Habitat 1 (exemple statique) -->
                <div class="bg-yellow-100 rounded-xl shadow-md p-4">
                    <h3 class="text-lg font-bold text-gray-800 mb-2">🌾 Savane</h3>
                    <p class="text-gray-600 text-sm">Grande plaine ensoleillée avec des herbes hautes.</p>
                </div>

                <!-- Carte Habitat 2 -->
                <div class="bg-green-100 rounded-xl shadow-md p-4">
                    <h3 class="text-lg font-bold text-gray-800 mb-2">🌴 Jungle</h3>
                    <p class="text-gray-600 text-sm">Forêt tropicale dense et humide.</p>
                </div>

                <!-- Carte Habitat 3 -->
                <div class="bg-orange-100 rounded-xl shadow-md p-4">
                    <h3 class="text-lg font-bold text-gray-800 mb-2">🏜️ Désert</h3>
                    <p class="text-gray-600 text-sm">Zone aride avec sable et rochers.</p>
                </div>

                <!-- Carte Habitat 4 -->
                <div class="bg-blue-100 rounded-xl shadow-md p-4">
                    <h3 class="text-lg font-bold text-gray-800 mb-2">🌊 Océan</h3>
                    <p class="text-gray-600 text-sm">Grand bassin d'eau salée pour animaux marins.</p>
                </div>

            </div>
            <!-- PHP: Fermeture de la boucle } -->
        </div>

        <!-- SECTION ANIMAUX -->
        <div class="mb-8">
            <div class="flex justify-center mb-8">
    <h2 class="text-2xl font-bold text-gray-800">🐾 Nos Animaux</h2>
</div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                
                <!-- Carte Animal 1 (exemple statique) -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden">
                    <!-- Image -->
                    <!-- PHP: <img src="<?php echo $animal['image']; ?>" alt="..." class="w-full h-40 object-cover bg-yellow-200"> -->
                    <div class="w-full h-40 bg-yellow-200 flex items-center justify-center">
                        <span class="text-6xl">🦁</span>
                    </div>
                    
                    <!-- Infos -->
                    <div class="p-4">
                        <!-- PHP: echo $animal['nom']; -->
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Simba</h3>
                        
                        <!-- PHP: echo $animal['type_alimentaire']; -->
                        <p class="text-gray-600 text-sm mb-1"><strong>Type :</strong> Carnivore</p>
                        
                        <!-- PHP: echo $animal['habitat']; -->
                        <p class="text-gray-600 text-sm mb-4"><strong>Habitat :</strong> Savane</p>
                        
                        <!-- Boutons d'action -->
                        <div class="flex gap-2">
                            <!-- PHP: <a href="update.php?id=<?php echo $animal['id']; ?>"> -->
                            <a href="update.php?id=1" class="flex-1 text-center bg-blue-500 text-white font-medium py-2 rounded-lg hover:bg-blue-600 transition">
                                Modifier
                            </a>
                            
                            <!-- PHP: <a href="delete.php?id=<?php echo $animal['id']; ?>"> -->
                            <a href="delete.php?id=1" class="flex-1 text-center bg-red-500 text-white font-medium py-2 rounded-lg hover:bg-red-600 transition">
                                Supprimer
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Carte Animal 2 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden">
                    <div class="w-full h-40 bg-gray-300 flex items-center justify-center">
                        <span class="text-6xl">🐘</span>
                    </div>
                    <div class="p-4">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Dumbo</h3>
                        <p class="text-gray-600 text-sm mb-1"><strong>Type :</strong> Herbivore</p>
                        <p class="text-gray-600 text-sm mb-4"><strong>Habitat :</strong> Savane</p>
                        <div class="flex gap-2">
                            <a href="update.php?id=2" class="flex-1 text-center bg-blue-500 text-white font-medium py-2 rounded-lg hover:bg-blue-600 transition">Modifier</a>
                            <a href="delete.php?id=2" class="flex-1 text-center bg-red-500 text-white font-medium py-2 rounded-lg hover:bg-red-600 transition">Supprimer</a>
                        </div>
                    </div>
                </div>

                <!-- Carte Animal 3 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden">
                    <div class="w-full h-40 bg-green-200 flex items-center justify-center">
                        <span class="text-6xl">🐵</span>
                    </div>
                    <div class="p-4">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">George</h3>
                        <p class="text-gray-600 text-sm mb-1"><strong>Type :</strong> Omnivore</p>
                        <p class="text-gray-600 text-sm mb-4"><strong>Habitat :</strong> Jungle</p>
                        <div class="flex gap-2">
                            <a href="update.php?id=3" class="flex-1 text-center bg-blue-500 text-white font-medium py-2 rounded-lg hover:bg-blue-600 transition">Modifier</a>
                            <a href="delete.php?id=3" class="flex-1 text-center bg-red-500 text-white font-medium py-2 rounded-lg hover:bg-red-600 transition">Supprimer</a>
                        </div>
                    </div>
                </div>

                <!-- Carte Animal 4 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden">
                    <div class="w-full h-40 bg-orange-200 flex items-center justify-center">
                        <span class="text-6xl">🦊</span>
                    </div>
                    <div class="p-4">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Robin</h3>
                        <p class="text-gray-600 text-sm mb-1"><strong>Type :</strong> Omnivore</p>
                        <p class="text-gray-600 text-sm mb-4"><strong>Habitat :</strong> Désert</p>
                        <div class="flex gap-2">
                            <a href="update.php?id=4" class="flex-1 text-center bg-blue-500 text-white font-medium py-2 rounded-lg hover:bg-blue-600 transition">Modifier</a>
                            <a href="delete.php?id=4" class="flex-1 text-center bg-red-500 text-white font-medium py-2 rounded-lg hover:bg-red-600 transition">Supprimer</a>
                        </div>
                    </div>
                </div>

                <!-- Carte Animal 5 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden">
                    <div class="w-full h-40 bg-blue-200 flex items-center justify-center">
                        <span class="text-6xl">🐬</span>
                    </div>
                    <div class="p-4">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Flipper</h3>
                        <p class="text-gray-600 text-sm mb-1"><strong>Type :</strong> Carnivore</p>
                        <p class="text-gray-600 text-sm mb-4"><strong>Habitat :</strong> Océan</p>
                        <div class="flex gap-2">
                            <a href="update.php?id=5" class="flex-1 text-center bg-blue-500 text-white font-medium py-2 rounded-lg hover:bg-blue-600 transition">Modifier</a>
                            <a href="delete.php?id=5" class="flex-1 text-center bg-red-500 text-white font-medium py-2 rounded-lg hover:bg-red-600 transition">Supprimer</a>
                        </div>
                    </div>
                </div>

                <!-- Carte Animal 6 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden">
                    <div class="w-full h-40 bg-purple-200 flex items-center justify-center">
                        <span class="text-6xl">🐪</span>
                    </div>
                    <div class="p-4">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Camelia</h3>
                        <p class="text-gray-600 text-sm mb-1"><strong>Type :</strong> Herbivore</p>
                        <p class="text-gray-600 text-sm mb-4"><strong>Habitat :</strong> Désert</p>
                        <div class="flex gap-2">
                            <a href="update.php?id=6" class="flex-1 text-center bg-blue-500 text-white font-medium py-2 rounded-lg hover:bg-blue-600 transition">Modifier</a>
                            <a href="delete.php?id=6" class="flex-1 text-center bg-red-500 text-white font-medium py-2 rounded-lg hover:bg-red-600 transition">Supprimer</a>
                        </div>
                    </div>
                </div>

            </div>
            <!-- PHP: Fermeture de la boucle } -->
        </div>

        <!-- BOUTON AJOUTER UN ANIMAL -->
        <div class="text-center">
            <!-- PHP: Lien vers add.php -->
           <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="bg-green-500 text-white font-medium px-6 py-2 rounded-lg hover:bg-green-600 transition" type="button">
            Ajouter un Animaux
            </button>
        </div>

    </div>

    <!-- Main modal -->
<div id="authentication-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full bg-black/50">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white border border-default rounded-base shadow-sm p-4 md:p-6">
            <!-- Modal header -->
            <div class="flex items-center justify-between border-b border-default pb-4 md:pb-5">
                <h3 class="text-green-500 text-lg font-bold ">
                    Ajouter un Animal
                </h3>
                <button type="button" class="text-body bg-transparent hover:bg-neutral-tertiary hover:text-heading rounded-base text-sm w-9 h-9 ms-auto inline-flex justify-center items-center" data-modal-hide="authentication-modal">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6"/></svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
           <form action="ajouter.php" method="POST" class="pt-4 md:pt-6" enctype="multipart/form-data">
                <div class="mb-4">
                    <label for="nom" class="block mb-2.5 text-sm font-medium text-heading">Nom de l'animal</label>
                    <input type="text" id="nom" class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body rounded-lg" placeholder="Nom animal" required />
                </div>
                <div class="mb-4">
                    <label  class="block mb-2.5 text-sm font-medium text-heading">Type alimentaire</label>
                   <select name="type_alimentaire" id="select-typeAlimentaire" class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body rounded-lg" >
                    <option value="" disalbled selected>Type alimentaire</option>
                    <option value="Carnivore">Carnivore</option>
                    <option value="Herbivore">Herbivore</option>
                    <option value="Omnivore">Omnivore</option>
                   
                   </select>
                </div>

                 <div class="mb-4">
                    <label  class="block mb-2.5 text-sm font-medium text-heading">Habitat</label>
                   <select name="habitat" id="select-typeAlimentaire" class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body rounded-lg" >
                    <option value="" disalbled selected>Habitat</option>
                    <option value="Savane Africaine">Savane Africaine</option>
                    <option value="ocean">ocean</option>
                    <option value="jungle">jungle</option>
                    <option value="desert">desert</option>
                   
                   </select>
                </div>

                <div class="mb-4 bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body rounded-lg">
                    <input type="file" name="image" required>
                </div>
                
                
                
                <button type="submit" class=" mb-4 text-white bg-green-600 box-border border border-transparent hover:bg-brand-strong focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-lg text-sm px-4 py-2.5 focus:outline-none w-full mb-3">AJOUTER</button>
            </form>
        </div>
    </div>
</div> 


    <!-- SECTION STATISTIQUES -->
<div class="container mx-auto px-4 py-12 max-w-5xl">
    <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">
        📊 Statistiques du Zoo
    </h2>

    <div class="bg-white rounded-xl shadow-md p-6">
        
        <p class="text-gray-600 text-sm mb-6 text-center">
            Aperçu rapide du nombre d'animaux par type alimentaire.
        </p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-center">

            <!-- Bloc Carnivores -->
            <div class="bg-red-100 p-6 rounded-xl shadow">
                <h3 class="text-xl font-bold text-red-700">Carnivores</h3>
                <p class="text-3xl font-extrabold text-red-900 mt-2">
                    <!-- PHP: echo $countCarnivore -->
                    0
                </p>
            </div>

            <!-- Bloc Herbivores -->
            <div class="bg-green-100 p-6 rounded-xl shadow">
                <h3 class="text-xl font-bold text-green-700">Herbivores</h3>
                <p class="text-3xl font-extrabold text-green-900 mt-2">
                    <!-- PHP: echo $countHerbivore -->
                    0
                </p>
            </div>

            <!-- Bloc Omnivores -->
            <div class="bg-blue-100 p-6 rounded-xl shadow">
                <h3 class="text-xl font-bold text-blue-700">Omnivores</h3>
                <p class="text-3xl font-extrabold text-blue-900 mt-2">
                    <!-- PHP: echo $countOmnivore -->
                    0
                </p>
            </div>

        </div>
    </div>
</div>




    <!-- FOOTER -->
    <footer class="bg-gray-200 py-4 mt-12">
        <div class="container mx-auto px-4 text-center">
            <p class="text-gray-600 text-sm">© 2024 Zoo Kids - Projet Étudiant</p>
        </div>
    </footer>
<script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>

</body>
</html>