<?php

	// require 'Weakness.php';
	// require 'Attack.php';
	// require 'EnergyType.php';
	// require 'Resistance.php';

	/**
	* 
	*/
	class Charmeleon extends Pokemon
	{	
		public function __construct($name)
		{
			$name = $name;
			$energyType = new EnergyType('Fire');
			$hitpoints = 60;
			$attacks = [new Attack('headButt', 10), new Attack('Flare', 30)];
			$weakness = new Weakness(new EnergyType('Water'), 2);
			$resistance = new Resistance(new EnergyType('Lighting'), 10);

			parent::__construct($name, $energyType, $hitpoints, $attacks, $weakness, $resistance);
		}
	}

?>