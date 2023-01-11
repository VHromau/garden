<?php

class Garden {

    private $apples;
    private $pears;

    public function __construct($appleTree = 10, $pearTree = 15) {
        $this->apples = $this->generate('Apple', $appleTree);
        $this->pears = $this->generate('Pear', $pearTree);
    }

    private function generate($type, $treeCount) {
        static $id = 1;
        $fruitArray = [];
        foreach (range(1, $treeCount) as $i) {
            $fruit = new $type;
            $fruit->setId($id++);
            array_push($fruitArray, $fruit);
        }
        return $fruitArray;
    }

    public function getFruits() {
        $apple = 0;
        $pear = 0;

        foreach ($this->apples as $apple) {
            $apple += $apple->getFruit();
        }

        foreach ($this->pears as $pear) {
            $pear += $pear->getFruit();
        }

        return ['apple' => $apple, 'pear' => $pear];
    }

}

