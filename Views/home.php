<?php $this->layout('template', ['title' => 'Hoyodex']); ?>

<div class="home">
    <header>
        <h1>Collection <?= $this->e($gameName) ?></h1>
    </header>

    <h2>Liste des personnages</h2>

    <div class="character-list">
        <?php foreach ($listPersonnage as $index => $personnage): ?>
            <div class="character-name">
                <?php
                    $name = $personnage->getName();
                    $element = $personnage->getElement();
                    $weapon = $personnage->getUnitclass();
                    $rarity = $personnage->getRarity();
                    $origin = $personnage->getOrigin();
                    $image = $personnage->getUrlImg();
                ?>

                <div class="character-card">
                    <div class="header-card">
                        <div class="rarity-card">
                            <?= $rarity ?>
                        </div>
                        <div class="element-card">
                            <?= $element ?>
                        </div>
                    </div>

                    <div class="image-card">
                        <?= $image ?>
                    </div>

                    <div class="origin-card">
                        <?= $origin ?>
                    </div>

                    <div class="weapon-card">
                        <?= $weapon ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <footer></footer>
</div>