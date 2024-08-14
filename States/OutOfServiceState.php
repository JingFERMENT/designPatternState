<?php

class OutOfServiceState implements State {

    public function insertCoin()
    {
        echo "Machine is out of service. No coin accepted.\n";
    }

    public function selectDrink()
    {
        echo "Machine is out of service. Cannot select a drink.\n";
    }

    public function dispense()
    {
        echo "Machine is out of service. Cannot dispense.\n";
    }


}