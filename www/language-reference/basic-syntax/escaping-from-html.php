<p>This text is not processed by PHP interpreter</p>

<?= 'This text is processed<br>'?>

<?php if (true):?>
    <p>This text is always shown</p>
<?else:?>
    <p>This text is never shown</p>
<?endif?>
