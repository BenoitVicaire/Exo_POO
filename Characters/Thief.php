<?php

class Thief extends AbstractCharacter{

// METHOD
	public function attack(AbstractCharacter $target):void{
		$damage = $this->getWeapon()->hit();
		$target->takeDamage($damage);
	}

	public function backstab(AbstractCharacter $target):void{
		echo $this->getName() . " backstab " . $target->getName() . "!";
		$damage = $this->getWeapon()->hit()*2;
		$target->takeDamage($damage);
	}
}