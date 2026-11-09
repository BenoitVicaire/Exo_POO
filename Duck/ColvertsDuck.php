<?php

class ColvertsDuck extends Duck implements Fly,Swim{
	// CONSTRUCTOR
	public function __construct(string $newName){
		parent::__construct($newName, "Colvert");
	}
	// METHOD
	public function quack():void{
		echo "Je fait Coin Coin \n";
	}
	public function fly():void{
		echo "Je vole en battant des ailes \n";
	}

	public function swim():void{
		echo "Je nage comme léon marchand \n";
	}
}