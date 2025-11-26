# Hoyodex
 
## Technologies utilisées :
- php
- mysql
- visual studio code
 
## Étape 1 : Récupération de projet :
Cloner le projet

exemple :
```ini
git clone https://github.com/LARUE-Jeremie/Hoyodex.git
```
 
## Étape 2 : Base de données :
#### Fichier de configuration :
Créer le fichier **`Config\dev.ini`** :
```ini
;config dev
[DB]
dsn = 'mysql:host=localhost;dbname=YOURDBNAME;charset=utf8';
user = 'YOUR_USERNAME';
pass = 'YOUR_PASSWORD';
```
Adapter en remplaçant les variables :
- `YOURDBNAME`
- `YOUR_USERNAME`
- `YOUR_PASSWORD`

#### Création de la base :
Lancer les scripts de ce fichier SQL :
`Hoyodex\DB\scriptsSQL\DB_Genshin.sql`
 
## Étape 3 : Accès au site :
lancer : `index.php` (à la racine du projet)

exemple :
```ini
C:\php\php.exe -S localhost:8000
```
