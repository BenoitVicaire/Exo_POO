<?php
abstract class Duck{
	//ATTRIBUTES
	private string $name;
	private string $race;

	// CONSTRUCTOR
	public function __construct(string $newName, string $newRace){
		$this->name = $newName;
		$this->race = $newRace;
	}

	// GETTER AND SETTER
	
	/**
	 * Get the value of name
	 *
	 * @return string
	 */
	public function getName(): string {
		return $this->name;
	}

	/**
	 * Set the value of name
	 *
	 * @param string $name
	 *
	 * @return self
	 */
	public function setName(string $name): self {
		$this->name = $name;
		return $this;
	}
	/**
	 * Get the value of race
	 *
	 * @return string
	 */
	public function getRace(): string {
		return $this->race;
	}

	/**
	 * Set the value of race
	 *
	 * @param string $race
	 *
	 * @return self
	 */
	public function setRace(string $race): self {
		$this->race = $race;
		return $this;
	}
	

	

	// Method
	abstract public function quack(): void;


	

	
}
