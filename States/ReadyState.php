<?php

class ReadyState implements State {
    public function insertCoin() {
        echo "Coin inserted. You can now select a drink.\n";
    }

    public function selectDrink() {
        echo "Drink selected. Dispensing your drink...\n";
    }

    public function dispense() {
        echo "Dispensing the drink...\n";
    }
}

