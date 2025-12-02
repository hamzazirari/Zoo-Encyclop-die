--CREATION_______________________________________________________
CREATE DATABASE ZOO;
USE ZOO;

CREATE TABLE habitats(
    idHab int PRIMARY KEY AUTO_INCREMENT,
    NomHab varchar(100),
    descriptionHab text
);


CREATE TABLE animal(
    id int PRIMARY KEY AUTO_INCREMENT,
    nom varchar(100),
    type_alimentaire varchar (100),
    image varchar(100),
    habitat_id int,
    FOREIGN KEY (habitat_id) REFERENCES habitats(idHab)
);

--INSERER_______________________________________________________

------------------------HABITATS-----------------------------
INSERT INTO habitats (nom_hab, desciption_hab)
VALUES ('Savane', 'Grande zone sèche avec lions et girafes.');

INSERT INTO habitats (nom_hab, desciption_hab)
VALUES ('Ocean', 'Grande zone d eau  avec poisson etc.');

---------------------------Animal--------------------------------
INSERT INTO animal (nom_animal, type_alimentaire, image, habitat_id)
VALUES ('Lion', 'Carnivore', 'Lion.jpg', 1);

INSERT INTO animal (nom_animal, type_alimentaire, image, habitat_id)
VALUES ('Dophin', 'Omnivore', 'Dophin.jpg', 2);

--UPDATE__________________________________________________________

UPDATE animal
SET type_alimentaire = 'Herbivore'
WHERE id_animal = 1;

UPDATE habitats
SET nom_hab = 'Savane Africaine'
WHERE id_hab = 1;

--DELETE______________________________________________________________
DELETE FROM animal
WHERE id_animal = 1;

--AFFICHER____________________________________________________________
SELECT * FROM animal;
SELECT * FROM habitats;
                     --AFFICHER ANIMEAUX AVEC LEUR HABITAT
SELECT animal.nom_animal, animal.type_alimentaire, habitats.nom_hab
FROM animal JOIN habitats ON animal.habitat_id = habitats.id_hab;
