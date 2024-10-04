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
}