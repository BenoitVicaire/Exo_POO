<?php
class Joueur{
	// ATTRIBUTS
	private string $name;
	private int $valeurLance;
	private Des $des;

	// CONSTRUCTOR
	public function __construct(string $newName, int $newValeurLance, Des $newDes){
		$this->name = $newName;
		$this->valeurLance = $newValeurLance;
		$this->des = $newDes;
		}

	// GETTER AND SETTER

	/**
	 * Get the value of Name
	 *
	 * @return string
	 */
	public function getName(): string {
		return $this->name;
	}

	/**
	 * Set the value of Name
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
	 * Get the value of valeurLance
	 *
	 * @return int
	 */
	public function getValeurLance(): int {
		return $this->valeurLance;
	}

	/**
	 * Set the value of valeurLance
	 *
	 * @param int $valeurLance
	 *
	 * @return self
	 */
	public function setValeurLance(int $valeurLance): self {
		$this->valeurLance = $valeurLance;
		return $this;
	}

	/**
	 * Get the value of des
	 *
	 * @return Des
	 */
	public function getDes(): Des {
		return $this->des;
	}

	/**
	 * Set the value of des
	 *
	 * @param Des $des
	 *
	 * @return self
	 */
	public function setDes(Des $des): self {
		$this->des = $des;
		return $this;
	}

	// METHOD
	public function lancerDes(){
		$this->valeurLance = $this->des->lancer();
		return $this->valeurLance;
	}
}