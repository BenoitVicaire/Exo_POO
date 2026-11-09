<?php

class Des{
	// ATTRIBUTS
	private int $nbrface;
	private int $score;

	// CONSTRUCTOR
	public function __construct(int $newNbrFace, int $newScore){
		$this->nbrface = $newNbrFace;
		$this->score = $newScore;
	}
	// GETTER AND SETTER
	
	/**
	 * Get the value of nbrface
	 *
	 * @return int
	 */
	public function getNbrface(): int {
		return $this->nbrface;
	}

	/**
	 * Set the value of nbrface
	 *
	 * @param int $nbrface
	 *
	 * @return self
	 */
	public function setNbrface(int $nbrface): self {
		$this->nbrface = $nbrface;
		return $this;
	}

	/**
	 * Get the value of score
	 *
	 * @return int
	 */
	public function getScore(): int {
		return $this->score;
	}

	/**
	 * Set the value of score
	 *
	 * @param int $score
	 *
	 * @return self
	 */
	public function setScore(int $score): self {
		$this->score = $score;
		return $this;
	}
	// METHOD
	public function lancer(){
		return rand(1,6);
	}
}