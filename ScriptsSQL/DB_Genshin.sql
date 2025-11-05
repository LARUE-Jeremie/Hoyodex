
# SCHEMA
DROP SCHEMA IF EXISTS GENSHIN;
CREATE SCHEMA GENSHIN
  CHARACTER SET utf8
  COLLATE utf8_general_ci;
use GENSHIN;

# DATABASE
CREATE TABLE IF NOT EXISTS personnage (
    id_personnage INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    element VARCHAR(50) NOT NULL,
    unitclass VARCHAR(50) NOT NULL,
    origin VARCHAR(100),
    rarity INT NOT NULL,
    url_img VARCHAR(255) NOT NULL
);

# INSERTS
INSERT INTO personnage (name, element, unitclass, origin, rarity, url_img)
VALUES ('Aino', 'Hydro', 'Claymore', 'Nod-Krai', 4, 'public/img/characters/Aino.png');

