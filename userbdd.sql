
-- Création de la table "utilisateurs"
CREATE TABLE IF NOT EXISTS utilisateurs (
    id INT PRIMARY KEY AUTO_INCREMENT,
    login VARCHAR(255) NOT NULL,
    mot_de_passe VARCHAR(255) NOT NULL
);
