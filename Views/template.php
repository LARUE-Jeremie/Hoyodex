<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8"/>
        <link rel="icon" type="image/x-icon" href="public/img/favicon.ico">
        <link rel="stylesheet" href="public/css/main.css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?= $this->e('Hoyodex') ?></title>
    </head>
    <body>
        <div class="background">
            <div class="hoyodex">
                <!-- SIDE -->
                <div class="sideWindow">
                    <div class="home-panel">
                        <button class="home-button" onclick="window.location.href='index.php'">
                            <img src="public/img/icons/cards.webp" alt="game icon">
                        </button>
                    </div>
                    <div class="top-menus">Menus</div>
                    <div class="menus">
                        <button class="menu-button" onclick="window.location.href='index.php?action=add-character'">
                            <img src="public/img/icons/character.webp" alt="game icon">
                        </button>
                        <button class="menu-button" onclick="window.location.href='index.php?action=add-element'">
                            <img src="public/img/icons/element.webp" alt="game icon">
                        </button>
                        <button class="menu-button" onclick="window.location.href='index.php?action=logs'">Logs</button>
                        <button class="menu-button" onclick="window.location.href='index.php?action=login'">
                            <img src="public/img/icons/login.webp" alt="game icon">
                        </button>
                    </div>
                </div>

                <!-- MAIN -->
                <div class="mainWindow">
                    <!-- top -->
                    <div class="mainWindow-top">
                        <div class="gamePicture">
                            <img src="public/img/icons/favicon.ico" alt="game icon">
                        </div>
                        <div class="lights">
                            <div class="littleLight green"></div>
                            <div class="littleLight yellow"></div>
                            <div class="littleLight red"></div>
                            <div class="mainLight"></div>
                        </div>
                    </div>
                    <!-- menu -->
                    <div class="mainWindow-menu">
                        <div class="menu-title">
                            <h2><?= $menuTitle ?></h2>
                        </div>
                        <div class="menu-content">
                            <!-- page content -->
                            <main id="contenu" class="contenu">
                                <?=$this->section('content')?>
                            </main>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
