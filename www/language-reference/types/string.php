<?php
$heredoc = <<<DOC
        heredoc
         string
DOC;
$name = 'Ivan';
?>

<ul>
    <li><?= 'Single quoted string' ?></li>
    <li><?= "Double quoted string" ?></li>
    <li><?= $heredoc ?></li>
    <li><?= "Double quoted string with variable $name" ?></li>
    <li><?= 'String with new
    line'?></li>
</ul>