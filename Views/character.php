<?php $this->layout('template', ['menuTitle' => $menuTitle]); ?>

<div class="character">
    <form class="character-form" method="POST" action="index.php?action=<?= $action ?>">
        <div class="character-card-form">

            <!-- HEADER -->
            <div class="header-card">
                <div class="header-card-top">
                    <label>
                        <input type="radio" name="rarity" value="4" <?= ($character ? $character->getRarity() : 4) === 4 ? 'checked' : '' ?>> 4★
                        <input type="radio" name="rarity" value="5" <?= ($character ? $character->getRarity() : 4) === 5 ? 'checked' : '' ?>> 5★
                    </label>

                    <div class="element-card">
                        <select name="element" class="card-form-input">
                            <option value="">Élément</option>
                            <?php
                            $elements = ["Anemo","Cryo","Dendro","Electro","Geo","Hydro","Pyro"];
                            foreach($elements as $el): ?>
                                <option value="<?= $el ?>" <?= ($character ? $character->getElement() : '') === $el ? 'selected' : '' ?>><?= $el ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

                <div class="origin-card">
                    <input type="text" name="origin" placeholder="Origine" class="card-form-input" value="<?= $character ? $character->getOrigin() : '' ?>">
                </div>
            </div>

            <!-- BODY -->
            <div class="body-card">
                <div class="image-card">
                    <input type="text" name="urlImg" placeholder="URL de l'image" class="card-form-input" value="<?= $character ? $character->getUrlImg() : '' ?>">
                    <?php if ($character && $character->getUrlImg()): ?>
                        <div class="image-preview">
                            <img src="<?= $character->getUrlImg() ?>" alt="<?= htmlspecialchars($character->getName()) ?>">
                        </div>
                    <?php endif; ?>
                </div>

                <div class="name-card">
                    <input type="text" name="name" placeholder="Nom du personnage" class="card-form-input" value="<?= $character ? $character->getName() : '' ?>">
                </div>

                <div class="weapon-card">
                    <select name="weapon" class="card-form-input">
                        <option value="">Type d'arme</option>
                        <?php
                        $weapons = ["Bow","Catalyst","Claymore","Polearm","Sword"];
                        foreach($weapons as $w): ?>
                            <option value="<?= $w ?>" <?= ($character ? $character->getWeapon() : '') === $w ? 'selected' : '' ?>><?= $w ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
        </div>

        <button type="submit" class="menu-button"><?= $character ? 'Modifier' : 'Ajouter' ?></button>
    </form>
</div>
