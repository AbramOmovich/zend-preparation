<?php
    error_reporting(E_ALL);

    function getArray() {
        return ['a', 'b', 'c'];
    }

    function getNumber(){
        return random_int(0, 100);
    }
?>
<ul>
    <li>
        array initialization using array() syntax
        <?php
            print_r($arr = array(
                'a' => 1,
                'b' => 2,
                'c' => 3
            ))
        ?>
    </li>
    <li>
        since php 5.4 array initialization using [] syntax
        <?php
            print_r($arr = [
                'a' => 1,
                'b' => 2,
                'c' => 3
            ])
        ?>
    </li>
    <li>
        last key overrides previous duplicated keys
        <?php
            $arr = [
            0 => 'a',
            1 => 'b',
            '1' => 'c',
            true => 'e'
            ];
            print_r($arr);
        ?>
    </li>
    <li>
        array without keys
        <?php
            $arr = ['a', 'b', 'c'];
            print_r($arr);
        ?>
    </li>
    <li>
        setting only one index
        <?php
            $arr = ['a', 2 => 'b', 'c'];
            print_r($arr);
        ?>
    </li>
    <li>
        accessing elements using square brackets
        <?= $arr[2] ?>
    </li>
    <li>
        accessing element using curly brackets
        <?= $arr{2} ?>
    </li>
    <li>
        create and append elements to array<br>
        $newArr []= 'a';<br>
        $newArr [2] = 'b';<br>
        $newArr []= 'c';<br>
        <?php
            $newArr []= 'a';
            $newArr [2] = 'b';
            $newArr []= 'c';
            dump($newArr)
        ?>
    </li>
    <li>
        accessing elements of returned array by function <?= getArray()[0]; ?>
    </li>
    <li>
        accessing returned int as array element <?= getNumber()[2]; ?> no errors
    </li>
</ul>