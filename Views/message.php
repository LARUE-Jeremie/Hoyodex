<?php if(isset($message) && $message instanceof \Helpers\Message): ?>
    <div class="alert <?= $message->getColor() ?>">
        <strong><?= htmlspecialchars($message->getTitle()) ?></strong>:
        <?= htmlspecialchars($message->getMessage()) ?>
    </div>
<?php endif; ?>