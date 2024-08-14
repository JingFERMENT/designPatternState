<?php

$readyState = new ReadyState();

$dispensingState = new DispensingState();

$outOfServiceState = new OutOfServiceState();

// readyState
$vendingMachine = new VendingMachine($readyState);


$vendingMachine->insertCoin();
$vendingMachine->selectDrink();
$vendingMachine->dispense();

// DispensingState 
$vendingMachine->setState($dispensingState);
$vendingMachine->insertCoin();
