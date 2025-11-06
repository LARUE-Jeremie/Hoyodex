-- Active: 1762347300667@@127.0.0.1@3306@bdd_eseo

# SCHEMA
DROP SCHEMA IF EXISTS GENSHIN;
CREATE SCHEMA GENSHIN
  CHARACTER SET utf8
  COLLATE utf8_general_ci;
use GENSHIN;

# DATABASE
CREATE TABLE IF NOT EXISTS personnage (
    id_personnage VARCHAR(50) NOT NULL PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    element VARCHAR(50) NOT NULL,
    unitclass VARCHAR(50) NOT NULL,
    origin VARCHAR(100),
    rarity INT NOT NULL,
    url_img VARCHAR(255) NOT NULL
);

# INSERT TEST
INSERT INTO personnage (id_personnage, name, element, unitclass, origin, rarity, url_img)
VALUES ('1', 'Aino', 'Hydro', 'Claymore', 'Nod-Krai', 4, 'aino.webp');

#SHOW VARIABLES LIKE 'local_infile';
SET GLOBAL local_infile = 1;

# INSERTS
LOAD DATA LOCAL INFILE 'C:\\Users\\laruejere\\Desktop\\Hoyodex\\DB\\csv\\genshin.csv'
INTO TABLE personnage
FIELDS TERMINATED BY ','
ENCLOSED BY '"'
LINES TERMINATED BY '\n'
IGNORE 1 ROWS
(name, rarity, origin, element, @dummy, unitclass)
SET url_img = CONCAT(LOWER(REPLACE(name, ' ', '_')), '.webp');
