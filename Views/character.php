<?php $this->layout('template', ['menuTitle' => $menuTitle]); ?>

<?php
    $name = $character ? $character->getName() : '';
    $rarity = $character ? $character->getRarity() : 4; 
    $image = $character ? $character->getUrlImg() : '';

    $element_id = $character ? $character->getElement() : null; 
    $weapon_id = $character ? $character->getWeapon() : null;
    $origin_id = $character ? $character->getOrigin() : null;
    
    $elements_list = $elements_list ?? []; 
    $weapons_list = $weapons_list ?? [];
    $origins_list = $origins_list ?? [];
?>

<div class="character">
    <form class="character-form" method="POST" action="index.php?action=<?= $action ?>">
        <div class="character-card-form">

            <!-- HEADER -->
            <div class="header-card">
                <div class="header-card-top">
                    <label>
                        <input type="radio" name="rarity" value="4" <?= ($rarity) === 4 ? 'checked' : '' ?>> 4★
                        <input type="radio" name="rarity" value="5" <?= ($rarity) === 5 ? 'checked' : '' ?>> 5★
                    </label>

                    <div class="element-card">
                        <select name="element" class="card-form-input">
                            <option value="">Élément</option>
                            <?php foreach($elements_list as $el): ?>
                                <option 
                                    value="<?= $el['id'] ?>" 
                                    <?= ($element_id == $el['id']) ? 'selected' : '' ?>
                                >
                                    <?= $el['name'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

                <div class="origin-card">
                    <select name="origin" class="card-form-input">
                        <option value="">Origine</option>
                        <?php foreach($origins_list as $origin): ?>
                            <option 
                                value="<?= $origin['id'] ?>"
                                <?= ($origin_id == $origin['id']) ? 'selected' : '' ?>
                            >
                                <?= $origin['name'] ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <!-- BODY -->
            <div class="body-card">
                <div class="image-card">
                    <input type="text" name="urlImg" placeholder="URL de l'image" class="card-form-input" value="<?= $image ?>">
                    <?php if ($character && $image): ?>
                        <div class="image-preview">
                            <img src="<?= $image ?>" alt="<?= htmlspecialchars($name) ?>">
                        </div>
                    <?php endif; ?>
                </div>

                <div class="name-card">
                    <input type="text" name="name" placeholder="Nom du personnage" class="card-form-input" value="<?= $name ?>">
                </div>

                <div class="weapon-card">
                    <select name="weapon" class="card-form-input">
                        <option value="">Type d'arme</option>
                        <?php foreach($weapons_list as $w): ?>
                            <option 
                                value="<?= $w['id'] ?>" 
                                <?= ($weapon_id == $w['id']) ? 'selected' : '' ?>
                            >
                                <?= $w['name'] ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
        </div>

        <button type="submit" class="menu-button"><?= $character ? 'Modifier' : 'Ajouter' ?></button>
    </form>
</div>
