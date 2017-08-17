<?php
    echo htmlspecialchars('<?php Usual php tags ?>') . '<br><br>';
?>

<?
    echo htmlspecialchars('<? Short php tags ?>') . '<br><br>';
?>

<?= htmlspecialchars('<?= Short echo tag ?>');
