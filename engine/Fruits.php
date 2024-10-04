<?php
abstract class Fruit {
    protected string $tree_id;
    protected int $weight;

    public function getTreeID() : string {
        return $this->tree_id;
    }

    public function getWeight() : string {
        return $this->weight;
    }

    abstract public function growthUp();
}

class Apple extends Fruit {
    public function __construct($tree_id) {
        $this->tree_id = $tree_id;
        $this->weight = $this->growthUp();
    }

    // Одно яблоко весит от 150 до 180 гр
    public function growthUp() : int {
        return rand(150, 180);
    }
}
class Pear extends Fruit {
    public function __construct($tree_id) {
        $this->tree_id = $tree_id;
        $this->weight = $this->growthUp();
    }

    // Одна груша весит от 130 до 170 гр
    public function growthUp() : int {
        return rand(130, 170);
    }
}