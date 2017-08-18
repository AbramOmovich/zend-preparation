<?php
   $number = 100;
?>
    <h3>variable <?= $number, ' type of ', gettype($number)  ?></h3>
    <ul>
        <li>
            cast to boolean <? var_dump((boolean) $number) ?>
        </li>
        <li>
            cast to int <? var_dump((int) $number) ?>
        </li>
        <li>
            cast to float <? var_dump((float) $number) ?>
        </li>
        <li>
            cast to string <? var_dump((string) $number) ?>
        </li>
        <li>
            cast to array <? var_dump((array) $number) ?>
        </li>
        <li>
            cast to object <? var_dump((object) $number) ?>
        </li>
        <li>
            cast to null <?= var_dump((unset) $number) ?>
        </li>

    </ul>
