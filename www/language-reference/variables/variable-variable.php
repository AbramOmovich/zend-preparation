<?php
    error_reporting(E_ALL);
    $var = 'sample';
    $$var = 'dynamic var';

    $prop = 'name';

    class Sample
    {
        public $name = 'Ivan';
    }

    $obj = new Sample();
?>
<h4>Dynamic variables</h4>
<ul>
    <li>
        Usual variable $var = '<?= $var ?>'
    </li>
    <li>
        Variable variable $$var = '<?= $$var ?>'
    </li>
    <li>same as using variable named $sample: <?= $sample ?></li>
    <li>or even ${'sample'}: <?= ${'sample'} ?></li>
</ul>
<h4>Dynamic properties</h4>
<p>There we have variable $prop = 'name' and object with property $name</p>
<ul>
    <li>We can access it using usual $obj->name: <?= $obj->name ?></li>
    <li>Using $obj->$prop: <?= $obj->$prop ?></li>
    <li>Using curly brackets $obj->${'prop'}: <?= $obj->${'prop'} ?></li>
</ul>