<?php
// Тесты
include_once "inc.php";
use PHPUnit\Framework\TestCase;

class GardenTest extends TestCase {
    public function test() {
        // Яблоня и яблоки
        $apple_tree = new AppleTree;
        $apples = $apple_tree->harvest();

        $this->assertGreaterThanOrEqual(30, count($apples));
        $this->assertLessThanOrEqual(50, count($apples));

        foreach ($apples as $apple) {
            $this->assertInstanceOf(Apple::class, $apple);
            $this->assertGreaterThanOrEqual(150, $apple->getWeight());
            $this->assertLessThanOrEqual(180, $apple->getWeight());
        }

        // Груши
        $pear_tree = new PearTree;
        $pears = $pear_tree->harvest();

        $this->assertGreaterThanOrEqual(0, count($pears));
        $this->assertLessThanOrEqual(20, count($pears));

        foreach ($pears as $pear) {
            $this->assertInstanceOf(Pear::class, $pear);
            $this->assertGreaterThanOrEqual(130, $pear->getWeight());
            $this->assertLessThanOrEqual(170, $pear->getWeight());
        }
    }
}