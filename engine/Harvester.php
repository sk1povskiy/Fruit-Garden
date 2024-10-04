<?php
class Harvester {
    public function harvest(Garden $garden): array {
        $harvest_fruits = [];

        foreach ($garden->get() as $tree) {
            $fruits = $tree->harvest();

            foreach ($fruits as $fruit) {
                $fruit_type = get_class($fruit);
                $harvest_fruits[$fruit_type][] = $fruit;
            }
        }

        return $harvest_fruits;
    }

    public function calculateTotalWeight($fruits) : int {
        $fruits_weight = [];

        foreach ($fruits as $fruit) {
            if (is_object($fruit) && method_exists($fruit, 'getWeight')) {
                $fruits_weight[] = $fruit->getWeight();
            }
        }

        return array_sum($fruits_weight);
    }

    public function calculateHeaviestFruit($fruits): Fruit {
        $max_weight = 0;
        $heaviest_fruit = [];

        foreach ($fruits as $fruit) {
            if ($fruit->getWeight() > $max_weight) {
                $max_weight = $fruit->getWeight();
                $heaviest_fruit = $fruit;
            }
        }

        return $heaviest_fruit;
    }
}