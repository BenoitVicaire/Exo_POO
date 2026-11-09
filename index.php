<?php
//Exécuteur du jeu

//importer mes ressources
include './Characters/AbstractCharacter.php';
include './Interfaces/Weapon.php';
include './Characters/Warrior.php';
include './Characters/Thief.php';
include './Weapons/Sword.php';
include './Weapons/Bow.php';

//Instancier deux guerriers 
$guts = new Warrior(50, "Guts", 100, new Sword(30));
$griffith = new Warrior(70, "Griffith",50, new Sword(20));
$legolas = new Thief("Legolas", 50, new Bow(35,40));


$turn = 1;
while(!$legolas->isDead() && !$guts->isDead()){
	echo "Tour $turn \n"; 
	if($turn==1){
		$legolas->backstab($guts);
	}else{
		if(!$guts->isDead()){
			$guts->attack($legolas);
		}
		if(!$legolas->isDead()){
			$legolas->attack($guts);
		}
		echo $guts->getName() . " a " . $guts->getHealth() . " point de vie \n";
		echo $legolas->getName() . " a " . $legolas->getHealth() . " point de vie \n";
	}
	$turn++;
}