<?php
    echo "boolean is the simplest type.<br> It can be <b>true</b> or <b>false</b>.";
?>

<h3>Converting to boolean</h3>

<?php
    $values = [
        0.0,
        0,
        1,
        -1,
        '0',
        '1',
        '-1',
        [],
        null,
    ];
?>
    <table border="1">
        <tr>
            <?foreach ($values as $value):?>
                <td><?= $value . ' (' . gettype($value) . ')' ?> <?if (is_array($value) && empty($value)):?> empty <?endif?></td>
            <?endforeach?>
        </tr>
        <tr>
            <?foreach ($values as $value):?>
                <td><?= ((boolean) $value) ? 'true': 'false' ?></td>
            <?endforeach?>
        </tr>
    </table>
