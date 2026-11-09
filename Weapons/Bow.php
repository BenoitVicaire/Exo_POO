<?php

class Bow implements Weapon{
	// ATTRIBUT
	private int $damage;
	private int $range;

	// CONSTRUCTOR
	public function __construct(int $newDamage, int $newRange){
		$this->damage = $newDamage;
		$this->range = $newRange;
	}
	// GETTER AND SETTER

	/**
	 * Get the value of damage
	 *
	 * @return int
	 */
	public function getDamage(): int {
		return $this->damage;
	}

	/**
	 * Set the value of damage
	 *
	 * @param int $damage
	 *
	 * @return self
	 */
	public function setDamage(int $damage): self {
		$this->damage = $damage;
		return $this;
	}

	/**
	 * Get the value of range
	 *
	 * @return int
	 */
	public function getRange(): int {
		return $this->range;
	}

	/**
	 * Set the value of range
	 *
	 * @param int $range
	 *
	 * @return self
	 */
	public function setRange(int $range): self {
		$this->range = $range;
		return $this;
	}

	// METHOD
	public function hit():int{
		echo("Une flèche en pleine poire à ". $this->range . " mettre \n");
		return $this->damage;
	}
}