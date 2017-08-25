<?php
    highlight_file(__FILE__);

    $a = 1;
    $b = '1';

    dump($a == $b);
    dump($a === $b);
    dump($a != $b);
    dump($a <> $b);
    dump($a !== $b);
    dump($a < $b);
    dump($a <= $b);
    dump('1' <=> 1);

    dump(2 <=> 4);
    dump(4 <=> 3);

    dump([2,3,4] <=> [2,4,5]);
    dump('abc' <=> 'abc');

    $a = null;
    $b = $a ?? 'default';
    dump($b);

    $a = 1;
    $b = $a ?? 'default';
    dump($b);