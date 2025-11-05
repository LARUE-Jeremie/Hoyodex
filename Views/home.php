<?php

$this->layout('template', ['title' => 'Hoyodex']);

?>

<h1>Collection <?= $this->e($gameName) ?></h1>

<h2>Liste des personnages :</h2>
<?php var_dump($listPersonnage); ?>

<h2>Premier personnage :</h2>
<?php var_dump($first); ?>

<h2>Personnage inexistant :</h2>
<?php var_dump($other); ?>