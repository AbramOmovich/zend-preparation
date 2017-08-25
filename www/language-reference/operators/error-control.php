<?php
    error_reporting(0);
    highlight_file(__FILE__);

    set_error_handler(function (int $errNum , string $errStr , string $errFile , int $errLine){
        echo '<pre>|' . $errNum . ': ' . $errStr . ' in <b>' . $errFile . '</b> on line ' . $errLine . '|</pre>';
    });

    $test = @$a['b'];
    $test = $a['b'];