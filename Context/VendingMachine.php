<?php

class VendingMachine {

    private $state;

    public function __construct(State $state) 
    {
        $this->setState($state);
    }

    public function setState(State $state) {
        $this->state = $state;
    }

    public function insertCoin(){
        $this->state->insertCoin();
    }

    public function selectDrink(){
        $this->state->selectDrink();
    }

    public function dispense(){
        $this->state->dispense();
    }
}