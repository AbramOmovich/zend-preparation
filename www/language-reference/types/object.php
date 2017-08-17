<?php

    class Thing
    {
        protected $number;

        public function __construct(int $number  = null)
        {
            if (is_null($number)) $this->number = random_int(0, PHP_INT_MAX);
            else{
                if ($number < 0) $number = abs($number);
                $this->number = $number;
            }
        }
    }

    echo '<h3>Creating object</h3>';
    $thing = new Thing();
    var_dump($thing);
    echo '<br>';

    echo '<h3>creating object using stdClass</h3>';
    $stdObj = new stdClass();
    $stdObj->number = 1;
    var_dump($stdObj);
    echo '<br>';

    $number = 777;

    echo '<h3>Cast int to object</h3>';
    $numberObject = (object) $number;
    var_dump($numberObject);
    echo '<br>';
