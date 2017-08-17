<?php
    echo '<h3>resource type is reference to remote resource</h3>>';

    $file = fopen(__FILE__, 'r');

    var_dump($file);

    echo "<h3>Multiplying resource type gives integer value " . $file * 3 . "</h3>";

    echo '<h3>Opened resource is destroyed by GC after running the script</h3>';