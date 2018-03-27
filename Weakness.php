<?php

	/**
	* Class for Weakness
	*/
	class Weakness
	{
		public $energyType;
		public $multiplier = 0;

		/**
		 * @param [type] $energyType [description]
		 * @param [type] $multiplier [description]
		 */
		public function __construct($energyType, $multiplier)
		{
			$this->energyType = $energyType;
			$this->multiplier = $multiplier;
		}
	}

?>