<?php

spl_autoload_register(function ($className) {
    require_once "{$className}.php";
});

$garden = new Garden();
$fruits = $garden->getFruits();


echo('Собрали:' . PHP_EOL);
echo('- ' . $fruits['apple'] . ' штук яблок' . PHP_EOL);
echo('- ' . $fruits['pear'] . ' штук груш' . PHP_EOL);
