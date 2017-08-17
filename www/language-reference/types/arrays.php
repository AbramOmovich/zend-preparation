<?php
error_reporting(E_ALL);
    // array initialization
    $arr = array(
        'a' => 1,
        'b' => 2,
        'c' => 3
    );

    //since php 5.4
    $arr = [
        'a' => 1,
        'b' => 2,
        'c' => 3
    ];

    //last key overrides previous duplicated keys
    $arr = [
        0 => 'a',
        1 => 'b',
        '1' => 'c',
        true => 'e'
    ];

    var_dump($arr);

    //array without keys
    $arr = ['a', 'b', 'c'];
    var_dump($arr);

    //setting only one index
    $arr = ['a', 2 => 'b', 'c'];
    var_dump($arr);

    //accessing elements using square brackets
    echo '<br>' . $arr[2] . '<br>';

    //accessing element using curly brackets
    echo $arr{2} . '<br>';

    $arr[4] = ['km' => 23];

    echo $arr[4]{'km'};

    //create and append elements to array
    $newArr []= 'a';
    $newArr [2] = 'b';
    $newArr []= 'c';

    var_dump($newArr);

    function getArray() {
        return ['a', 'b', 'c'];
    }

    function getNumber(){
        return random_int(0, 100);
    }

    echo getArray()[0];
    echo getNumber()[0];