<?php
// Класс для работы с садом (деревьями)
class Garden {
    private array $trees;

    public function add(Tree $tree) : void {
        $this->trees[] = $tree;
    }

    public function get() : array {
        return $this->trees;
    }
}