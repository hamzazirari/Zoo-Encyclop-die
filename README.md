Projet : Zoo Encyclopédie.
📘 Description

Projet éducatif en PHP permettant d’afficher et gérer des animaux pour un zoo.
Les enfants peuvent consulter et filtrer les animaux, et les formateurs peuvent gérer les données (CRUD).

👥 Acteurs

Formateur : Ajouter, modifier, supprimer, afficher, filtrer

Enfant : Afficher, filtrer

🐾 Fonctionnalités

Afficher la liste des animaux

Filtrer par habitat

Filtrer par type alimentaire

(Formateur) Ajouter un animal

(Formateur) Modifier un animal

(Formateur) Supprimer un animal

🗂️ Base de données
Table : habitats

id (INT, PK)

nom (VARCHAR)

Table : animaux

id (INT, PK)

nom (VARCHAR)

type_alimentaire (VARCHAR)

habitat_id (INT, FK → habitats.id)

Relation : 1 habitat possède plusieurs animaux (1:N)

📊 Diagrammes

Les captures d’écran des diagrammes se trouvent dans le dossier :
📁 captures/

🚀 Installation

Cloner le repo

Importer la base de données

Mettre le projet dans htdocs

Ouvrir dans le navigateur via localhost
