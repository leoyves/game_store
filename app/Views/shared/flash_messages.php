<?php
/**
 * @var string[]|null $errors
 * @var string[]|null $messages
 */
?>

<?php if (isset($errors)): ?>
    <?php foreach ($errors as $key =>$error): ?>
        <div class="alert alert-warning">
            <?= esc($error) ?>
        </div>
    <?php endforeach; ?>
<?php endif; ?>

<?php if (isset($messages)): ?>
    <?php foreach ($messages as $key =>$message): ?>
        <div class="alert alert-warning">
            <?= esc($message) ?>
        </div>
    <?php endforeach; ?>
<?php endif; ?>
