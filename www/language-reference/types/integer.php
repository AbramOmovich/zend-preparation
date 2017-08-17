<h3>Integer</h3>

<?php
    echo "Max integer value " . PHP_INT_MAX . '<br>';
    echo "Min integer value " . PHP_INT_MIN . '<br><br>';

    echo "<h4>Integer can be initialized in different notation, but will be outputted in decimal</h4>";
    echo 100 , " Decimal<br>";
    echo 0100 , " Octal<br>";
    echo 0x100 , " Decimal<br>";
    echo 0b100 , " Binary<br><br>";

    echo "When Integer is overflowed it's automatically converted to double <br>";
    $tmp = PHP_INT_MAX * 2;
?>
    <table border="1">
        <tr>
            <td>
                <?= $tmp ?>
            </td>
            <td>
                <?= gettype($tmp) ?>
            </td>
        </tr>
    </table>
