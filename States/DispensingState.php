<?php

class DispensingState implements State {
    public function insertCoin() {
        echo "Please wait, we are already dispensing a drink.\n";
    }

    public function selectDrink() {
        echo "Already dispensing a drink. Please wait.\n";
    }

    public function dispense() {
        echo "Drink is being dispensed...\n";
    }
}
