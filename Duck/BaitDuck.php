<?php

class BaitDuck extends Duck implements Floatable{
	// CONSTRUCTOR
	public function __construct(string $newName){
		parent::__construct($newName, "Bait");
	}
	// METHOD
	public function quack():void{
		echo " Je fait Coin Coin \n";
	}

	public function floatable(): void{
		echo "Je flote comme une buche \n";
	}
}