<?php
    echo "<h3> null represent variable with no value</h3>";
?>
<h3>Cases when variable is null</h3>
<ul>
    <li>it hasn't been set yet <?= gettype($nullVariable) ?></li>
    <li>it has been set null value <?php $nullVariable = null; echo gettype($nullVariable) ?></li>
    <li>it was unset by unset() function <?php $nullVariable = 1; unset($nullVariable); echo gettype($nullVariable) ?></li>
</ul>
