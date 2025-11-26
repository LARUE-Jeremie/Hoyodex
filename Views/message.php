<?php if ($message): ?>
<div class="message <?= $message->getColor() ?>">
    <h3><?= $message->getTitle() ?></h3>
    <p><?= $message->getText() ?></p>
</div>
<?php endif; ?>
