<?php
echo '<pre>';
    //arithmetic operators
    $val = 4 + 5 * 2;
    var_dump($val);

    $val = (4 + 5) * 2;
    var_dump($val);

    $val += $val;
    var_dump($val);

    var_dump($val++);
    var_dump(++$val);

    $val = true ? 1 ? 0 ? 2 : 3 : 4 : 5; //3
    var_dump($val);

    var_dump($val = 1 && false);
    var_dump($val = false and 1);
    var_dump($val = 1 || false);
    var_dump($val = false or 1);
echo '</pre>';