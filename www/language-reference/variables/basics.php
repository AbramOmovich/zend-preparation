<?php
    error_reporting(E_ALL);
?>
<ul>
    <li>
        Naming conventions
        <ul>
            <li>
                Can starts with letters or underscore
                <?php
                    $a = 1;
                    $_a = 1;

                    var_dump($_a);
                    var_dump($a);
                ?>
            </li>
            <li>
                Case sensitive
                <?php
                    $A = 2;
                    var_dump($a);
                    var_dump($A);
                ?>
            </li>
        </ul>
    </li>
    <li>
        <ul>Initializing by default
            <li>boolean
                <?php
                    $b;
                    settype($b, 'bool');
                    var_dump($b);
                ?>
            </li>
            <li>integer
                <?php
                    $c;
                    settype($c, 'int');
                    var_dump($c);
                ?>
            </li>
            <li>float
                <?php
                    $d;
                    settype($d, 'float');
                    var_dump($d);
                ?>
            </li>
            <li>string
                <?php
                    $e;
                    settype($e, 'string');
                    var_dump($e);
                ?>
            </li>
            <li>array
                <?php
                    $f;
                    settype($f, 'array');
                    var_dump($f);
                ?>
            </li>
            <li>object
                <?php
                    $g;
                    settype($g, 'object');
                    var_dump($g);
                ?>
            </li>
        </ul>
    </li>
    <li>
        Initializing by value
        <?php
            $h = 35;
            $j += 33.4;
            var_dump($h, $j);
        ?>
    </li>
</ul>