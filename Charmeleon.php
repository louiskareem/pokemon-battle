<?php

	// use Attack;
	// use Weakness;
	// use Resistance;
	// use EnergyType;

	/**
	* 
	*/
	class Charmeleon extends Pokemon
	{
		
		public $name;
		public $energy_type = "Fire";
		public $hitpoints = 60;
		public $weakness;
		public $attacks;
		public $resistance;	

		public function __construct($name)
		{
			$this->name = $name;
		}

		public function battle_moves()
		{

			$Weakness->EnergyType = "Water";
			$Weakness->multiplier = 2;
			$Resistance->EnergyType = "Lighting";
			$Resistance->worth = 10;
		}

	}

?>