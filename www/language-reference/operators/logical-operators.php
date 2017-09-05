<?php
    highlight_file(__FILE__);

    $a = (FALSE and TRUE);
    $b = (FALSE && TRUE);
    $c = (FALSE or TRUE);
    $d = (FALSE || TRUE);

    echo '<pre>';
    var_dump($a , $b, $c, $d);
    echo '</pre>';


    $a = FALSE and TRUE;
    $b = FALSE && TRUE;
    $c = FALSE or TRUE;
    $d = FALSE || TRUE;

    echo '<pre>';
    var_dump($a , $b, $c, $d);
    echo '</pre>';