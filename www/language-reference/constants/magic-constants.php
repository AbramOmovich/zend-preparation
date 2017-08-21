<?php
    namespace Constants\Test;

    class MagicConst
    {
        public static function className(){
            return __NAMESPACE__ . ' | ' . __CLASS__ . ' | ' . __METHOD__;
        }
    }

    function testFuncConst(){
        return __FUNCTION__;
    }
?>
<h3>Magic constants in PHP</h3>
    <ul>
        <li>__FILE__ full file name of script - <?= __FILE__ ?></li>
        <li>__DIR__ full dir name of script - <?= __DIR__ ?></li>
        <li>__LINE__ line number - <?= __LINE__ ?></li>
        <li><?= testFuncConst() ?></li>
        <li>__NAMESPACE__ | __CLASS__ | __METHOD__ - <?= MagicConst::className() ?></li>
        <li>ClassName::class - <?= MagicConst::class ?></li>
    </ul>