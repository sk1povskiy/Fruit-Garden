<?php
// Подключаем вспомогательный файл inc.php, в котором происходит вызов всего необходимого
include_once "inc.php";

// В саду посажано 10 яблонь и 15 груш
$apple_trees = 10;
$pear_trees = 15;

$garden = new Garden;

for ($i = 0; $i < $apple_trees; $i++) {
    $garden->add(new AppleTree());
}

for ($i = 0; $i < $pear_trees; $i++) {
    $garden->add(new PearTree());
}

$harvester = new Harvester;
$fruits = $harvester->harvest($garden);