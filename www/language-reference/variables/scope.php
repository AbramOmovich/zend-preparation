<?php
    error_reporting(E_ALL);

    function showVariable()
    {
        echo $glob;
    }

    function showGlobalVariable()
    {
        global $glob;
        echo $glob;
    }

    function showSuperGlobalVariable()
    {
        echo $GLOBALS['glob'];
    }

    function showStatic()
    {
        static $i;
        $i++;
        echo $i;
    }
?>

<h4>There is a global scope variables: </h4>
<?php
    $glob = 'global variable';
    echo $glob;
?>
<h4>And local scope variables: </h4>
<?php showVariable() ?>

<h4>Ways to access global variable from a local scope</h4>
<ul>
    <li>
        using key word global: <?php showGlobalVariable() ?>
    </li>
    <li>
        using superglobal array $GLOBALS: <?php showSuperGlobalVariable() ?>
    </li>
</ul>

<h4>Also there is a keyword 'static' for variables</h4>
<p>It means, that variable saves it's value every time program block with it is called</p>
<p>There we have<br>
    function showStatic()<br>
    {<br>
        static $i;<br>
        $i++;<br>
        echo $i; <br>
    }<br>
</p>
<p>Every time calling this function value of $i will be incremented</p>
<ul>
    <li><?php showStatic() ?></li>
    <li><?php showStatic() ?></li>
    <li><?php showStatic() ?></li>
    <li><?php showStatic() ?></li>
</ul>

