<?php
    setcookie('set[min]','10', time() + 60);
    setcookie('set[max]','100', time() + 60);

    if (isset($_COOKIE['set']['min']) && isset($_COOKIE['set']['max'])){
        $set = $_COOKIE['set'];
        echo '<h3>' . random_int($set['min'], $set['max']) . '</h3>';
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h4>PHP converts dots in input param names into underscores</h4>

<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
    <input type="hidden" value="sample" name="param.name">
    <input type="image" src="http://scapaflowwrecks.com/gmap//mapTiler/11/1007/606.png"><br>
    <button>send</button>
</form>
</body>
</html>
