<?php
    error_reporting(E_ALL);

    function test(){
        echo '!FUNCTION ' . __FUNCTION__ . '!';
    }

    function testCall(callable $func){
        $func();
    }

    class Test{
        public function foo(){
            echo __CLASS__ . '->' . __METHOD__;
        }

        public static function bar(){
            echo  __METHOD__;
        }

        public function __invoke()
        {
            echo __METHOD__;
        }
    }
?>

<h3>Here we have examples of callables</h3>
<ol>
    <li>
        Function name passed to callable param <?php testCall('test') ?>
    </li>
    <li>
        Anonymous function passed to callable param <?php testCall(function (){
            echo __FUNCTION__;
        }) ?>
    </li>
    <li>
        An array of object in index 0 and method name in index 1
        <?php testCall([new Test(), 'foo']) ?>
    </li>
    <li>
        An array of Class in index 0 and static method name in index 1
        <?php testCall([Test::class, 'bar']) ?>
    </li>
    <li>
        Full name of static method of class
        <?php testCall('Test::bar') ?>
    </li>
    <li>
        Call of invoke method
        <?php testCall(new Test()) ?>
    </li>
</ol>
