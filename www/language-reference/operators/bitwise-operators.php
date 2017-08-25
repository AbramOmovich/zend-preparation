<?php
echo '<pre>' . htmlspecialchars(file_get_contents(__FILE__));
    $i = 16;
    $j = 80;
    var_dump($i << 10);
    var_dump($i >> 2);
    var_dump($i ^ $j);
    var_dump($i | $j);
    var_dump(~$j);
    var_dump(~$i);
    var_dump($i & $j);
    var_dump('str' & 'adbc');
echo '</pre>';