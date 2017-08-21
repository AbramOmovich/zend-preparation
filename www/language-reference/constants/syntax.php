<?php
    function testConst()
    {
        echo SAMPLE_CONST .  ', ' . ANOTHER_CONST;
    }

    const arr = [ 'key' => 'val'];

    class ConstantsTest
    {
        const SAMPLE_CONST = 1.1;
        const ANOTHER_CONST = 2.1;

        public static function show()
        {
            echo self::SAMPLE_CONST . ', ' . self::ANOTHER_CONST;
        }
    }
?>

<h3>General syntax</h3>
<p>Constants might be defined using</p>
<ul>
    <li>define() function. Works only for scalar values <?php define('SAMPLE_CONST', 1) ?></li>
    <li>using const keyword <?php const ANOTHER_CONST = 2; ?></li>
</ul>

<p>
    <?php
        testConst();
        echo '<br>';
        ConstantsTest::show();
    ?>
</p>