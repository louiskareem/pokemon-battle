<?php

	/**
	* 
	*/
	class Pokemon
	{
		public $name;
		public $energy_type;
		public $hitpoints =  0;
		public $health = 0;
		public $weakness;
		public $attacks;
		public $resistance;		

		public function __construct($name, $energy_type, $hitpoints)
		{
			$this->name = $name;
			$this->energy_type = $energy_type;
			$this->hitpoints = $hitpoints;

		}
	}

?>