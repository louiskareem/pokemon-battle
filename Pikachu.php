<?php

	// use Attack;
	// use Weakness;
	// use Resistance;
	// use EnergyType;

	/**
	* 
	*/
	class Pikachu extends Pokemon
	{
		// public $name;
		public $energy_type = "Lighting";
		public $hitpoints = 0;
		// public $weakness;
		// public $attacks;
		// public $resistance;	

		public function __construct($name, $energy_type, $hitpoints)
		{
			parent::__construct($name, $energy_type, $hitpoints);
		}

		public function battle_moves()
		{
			$attacks = [
				'name' => electricRing, 
				'damage' => 50, 
				'name' => pikaPunch,
				'damage' => 20
			];

			$weakness->EnergyType = "Fire";
			$weakness->multiplier = 1.5;
			$resistance->EnergyType = "Fighting";
			$resistance->worth = 20;
		}
	}

?>