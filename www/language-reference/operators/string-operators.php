<?php
    highlight_file(__FILE__);

    $a = 'some ';
    $b = 'string';

    echo '<br>';
    var_dump($a . $b );
    echo '<br>';
    echo $a , $b , '<br>';
    echo $a .= $b , '<br>';
    var_dump($a);
    echo '<br>';