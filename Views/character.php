<?php $this->layout('template', ['menuTitle' => $menuTitle]); ?>

<div class="character">
    <form class="character-form" method="POST" action="index.php?action=add-perso">

        <div class="character-card-form">

            <!-- HEADER -->
            <div class="header-card">
                <div class="header-card-top">
                    <label>
                        <input type="radio" name="rarity" value="4" checked> 4★
                        <input type="radio" name="rarity" value="5"> 5★
                    </label>

                    <div class="element-card">
                        <select name="element" class="card-form-input">
                            <option value="">Élément</option>
                            <option value="Anemo">Anemo</option>
                            <option value="Cryo">Cryo</option>
                            <option value="Dendro">Dendro</option>
                            <option value="Electro">Electro</option>
                            <option value="Geo">Geo</option>
                            <option value="Hydro">Hydro</option>
                            <option value="Pyro">Pyro</option>
                        </select>
                    </div>
                </div>

                <div class="origin-card">
                    <input type="text" name="origin" placeholder="Origine" class="card-form-input">
                </div>
            </div>

            <!-- BODY -->
            <div class="body-card">
                <div class="image-card">
                    <input type="text" name="urlImg" placeholder="URL de l'image" class="card-form-input">
                </div>

                <div class="name-card">
                    <input type="text" name="name" placeholder="Nom du personnage" class="card-form-input">
                </div>

                <div class="weapon-card">
                    <select name="weapon" class="card-form-input">
                        <option value="">Type d'arme</option>
                        <option value="Bow">Bow</option>
                        <option value="Catalyst">Catalyst</option>
                        <option value="Claymore">Claymore</option>
                        <option value="Polearm">Polearm</option>
                        <option value="Sword">Sword</option>
                    </select>
                </div>
            </div>
        </div>

        <button type="submit" class="menu-button">Ajouter</button>
    </form>
</div>
