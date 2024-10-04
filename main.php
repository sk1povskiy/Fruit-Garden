<?php
// Подключаем вспомогательный файл inc.php, в котором происходит вызов всего необходимого
include_once "inc.php";

// В саду посажано 10 яблонь и 15 груш
$garden_trees = ['AppleTree' => 10, 'PearTree' => 15];

$garden = new Garden;

foreach ($garden_trees as $tree_type => $tree_amount) {
    for ($i = 0; $i < $tree_amount; $i++) {
        if (class_exists($tree_type)) {
            $garden->add(new $tree_type);
        }
    }
}

$harvester = new Harvester;
$fruits = $harvester->harvest($garden);
$heaviest_apple = $harvester->calculateHeaviestFruit($fruits['Apple']);

echo 'Всего яблок: ' . count($fruits['Apple']) . PHP_EOL;
echo 'Всего груш: ' . count($fruits['Pear']) . PHP_EOL;
echo 'Яблоки весят: ' . $harvester->calculateTotalWeight($fruits['Apple']) . ' грамм' . PHP_EOL;
echo 'Груши весят: ' . $harvester->calculateTotalWeight($fruits['Pear']) . ' грамм' . PHP_EOL;
echo 'Самое тяжёлое яблоко весит: ' . $heaviest_apple->getWeight() . ' грамм, собрано с дерева ' . $heaviest_apple->getTreeID() . PHP_EOL;