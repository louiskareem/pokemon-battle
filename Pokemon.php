<?php

	require 'Weakness.php';
	require 'Attack.php';
	require 'EnergyType.php';
	require 'Resistance.php';

	/**
	* 
	*/
	class Pokemon
	{
		public $name;
		public $energyType;
		public $hitpoints;
		public $health;
		public $attacks;
		public $weakness;
		public $resistance;		

		public function __construct($name, $energyType, $hitpoints, $attacks, $weakness, $resistance)
		{
			$this->name = $name;
			$this->energyType = $energyType;
			$this->hitpoints = $hitpoints;
			$this->health = $hitpoints;
			$this->attacks = $attacks;
			$this->weakness = $weakness;
			$this->resistance = $resistance;
		}


		public function attack($attack, $target)
		{
			$damage = $attack->damage;

			if (isset($target)) {
				$result = $target->health;
				print_r ('<h2>' . 'For his final move Ash chooses ' . $target->name . '. ' . $target->name . ' has an HP of ' . $result . '.' . '</h2>');
			}

			if ($target->weakness->energyType == $this->energyType) {

				$damage = $attack->damage * $target->weakness->multiplier;

			}elseif ($target->resistance->energyType == $this->energyType) {

				$damage = $attack->damage - $target->resistance->worth;

			}

			if (isset($damage)) {
				$result = $target->health - $damage;
				print_r ('<h2>' . 'But after getting attacked by ' . $this->name . '\'s ' . 'powerful ' . $attack->name . '. ' . $target->name  . '\'s health decreased to ' . $result . ' points.' . '</h2>');
			}
		}

		// public function takeDamage($damage)
		// {
		// 	$damage = $this->health - $damage;
		// }
	}
?>