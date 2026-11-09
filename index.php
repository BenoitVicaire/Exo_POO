<?php
//Exécuteur du jeu
include 'Interface/Floatable.php';
include 'Interface/Swim.php';
include 'Interface/Fly.php';
include 'Duck/AbstractDuck.php';
include 'Duck/ColvertsDuck.php';
include 'Duck/BaitDuck.php';
include 'Duck/RobotDuck.php';


$bob = new ColvertsDuck("Bob");
$lola = new BaitDuck("Lola");
$eliot = new RobotDuck("3l10t");
$ducks =[$bob,$lola,$eliot];

foreach($ducks as $duck){
	echo "Bonjour, je m'appelle " . $duck->getName() . " je suis un " . $duck->getRace() . "\n"; 
	if ($duck instanceof Floatable) {
		$duck->floatable();
	}
	if ($duck instanceof Fly) {
		$duck->fly();
	}
	if ($duck instanceof Swim) {
		$duck->swim();
	}
	echo "\n";

}