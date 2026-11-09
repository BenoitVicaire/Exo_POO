<?php

class RobotDuck extends Duck implements Fly,Swim{
	// CONSTRUCTOR
	public function __construct(string $newName){
		parent::__construct($newName, "Robot");
	}
	// METHOD
	public function quack():void{
		echo "Je fait Bip Bip";
	}

	public function swim():void{
		echo "Je nage comme terminator";
	}

	public function fly():void{
		echo "Je vole avec mes reacteurs dorsaux";
	}
}