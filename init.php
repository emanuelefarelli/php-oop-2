<?php

include_once __DIR__ . '/classes/product.php';
include_once __DIR__ . '/classes/category.php';
include_once __DIR__ . '/classes/food.php';
include_once __DIR__ . '/classes/toys.php';
include_once __DIR__ . '/classes/houses.php';

$sportToy = new category('Sport Item','For athletics dogs and cats');
$foodToy = new category('Food Item','For dogs and cats who loves to eant and play');
$exteriorHouse = new category('House Item','For make confortable outliving for our pets');

$fakeMouse = new toy('Super Mouse','Fake mouse to make your cats playing for hours!', $sportToy, true, 12.33, 'S', 'Plastic and wool');



?>