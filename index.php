<?php

include_once __DIR__ . '/classes/category.php';
include_once __DIR__ . '/classes/product.php';
include_once __DIR__ . '/init.php';
include_once __DIR__ . '/classes/food.php';
include_once __DIR__ . '/classes/toys.php';
include_once __DIR__ . '/classes/houses.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>oop-shop</title>
</head>
<body>
    <p>
        <?php
            echo var_dump($sportToy);
        ?>
    </p>

    <p>
        <?php
            echo var_dump($fakeMouse);
        ?>
    </p>
</body>
</html>