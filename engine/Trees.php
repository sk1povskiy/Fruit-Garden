<?php
// Класс Tree - шаблон для будущих деревьев с общим набором правил, в данном случае - tree_id
abstract class Tree {
    protected string $tree_id;

    public function __construct() {
        $this->tree_id = $this->generateTreeID();
    }

    private function generateTreeID() : string {
        // Не самая лучшая реализация ID дерева, но в качестве примера я считаю сгодится
        $hash = hash('sha256', rand(0, 999999));
        return $hash;
    }

    public function getID() : string {
        return $this->tree_id;
    }

    abstract public function harvest();
}

// Создадим класс "Яблоня" и "Груша"
class AppleTree extends Tree {
    // С одной яблони можно собрать от 40 до 50 яблок;
    public function harvest(): array {
        $apples = [];

        for ($i = 0; $i < rand(40, 50); $i++) {
            $apples[] = new Apple($this->tree_id);
        }

        return $apples;
    }
}

class PearTree extends Tree {
    // С одной груши можно собрать от 0 до 20 груш;
    public function harvest(): array {
        $pears = [];

        for ($i = 0; $i < rand(0, 20); $i++) {
            $pears[] = new Pear($this->tree_id);
        }

        return $pears;
    }
}