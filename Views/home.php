<?php $this->layout('template', ['menuTitle' => 'Liste des personnages']); ?>

<div class="home">
    <div class="scrollable">
        <div class="character-list">
            <?php foreach ($listPersonnage as $index => $personnage): ?>
                <div class="character-name">
                    <?php
                        $id = $personnage->getId();
                        $name = $personnage->getName();
                        $element = $personnage->getElement();
                        $weapon = $personnage->getWeapon();
                        $rarity = $personnage->getRarity();
                        $origin = $personnage->getOrigin();
                        $image = $personnage->getUrlImg();
                    ?>
                    <?php

                        // source: https://genshin-impact.fandom.com/wiki/Character/List
                        // $nameToLower = strtolower(str_replace(' ', '_', $name));
                        /* LOCAL */ //$characterImg = "public/img/characters/{$nameToLower}.webp";
                        /*  URL  */ //$characterImg = "https://i2.wp.com/images.genshin-builds.com/genshin/characters/{$nameToLower}/image.png?strip=all&quality=100&w=160";

                        $stars = str_repeat('★', $rarity);
                        switch ($rarity) {
                            case 4:
                                $rarityClass = 'rarity-4'; break;
                            case 5:
                                $rarityClass = 'rarity-5'; break;
                            default:
                                $rarityClass = '';
                        }

                        // source: https://wiki.hoyolab.com/pc/genshin/aggregate/character?lang=en-us
                        $elementToLower = strtolower($element);
                        $elementImg = "public/img/elements/{$elementToLower}.webp";
                        $weaponToLower = strtolower($weapon);
                        $weaponImg = "public/img/weapons/{$weaponToLower}.webp";
                    ?>

                    <div class="character-card">
                        <div class="card-actions">
                            <a href="?action=edit-character&id=<?= $id ?>" class="btn-edit">✏️</a>
                            <a href="?action=delete-character&id=<?= $id ?>" class="btn-del">🗑️</a>
                        </div>
                        <div class="header-card">
                            <div class="header-card-top">
                                <div class="stars-card <?= $rarityClass ?>">
                                    <?= $stars ?>
                                </div>
                                <div class="element-card">
                                    <img src="<?= $elementImg ?>" alt="<?= $element ?>">
                                </div>
                            </div>
                            <div class="origin-card">
                                <?= $origin ?>
                            </div>
                        </div>

                        <div class="body-card">
                            <div class="image-card">
                                <img src="<?= $image ?>" alt="<?= $name ?>">
                            </div>

                            <div class="name-card">
                                <?= $name ?>
                            </div>

                            <div class="weapon-card">
                                <img src="<?= $weaponImg ?>" alt="<?= $weapon ?>">
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
