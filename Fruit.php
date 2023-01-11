<?php

abstract class Fruit {
    protected $id;
    protected $minFruit;
    protected $maxFruit;
    protected $fruitType;

    public function getFruit() {
        return rand($this->minFruit, $this->maxFruit);
    }

    public function setId($id) {
        $this->id = $id;
    }
}