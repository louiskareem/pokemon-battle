<?php

	/**
	* Class for Resistance
	*/
	class Resistance
	{
		public $energyType;
		public $worth = 0;
		
		/**
		 * @param [type] $energyType [description]
		 * @param [type] $worth      [description]
		 */
		public function __construct($energyType, $worth)
		{
			$this->energyType = $energyType;
			$this->worth = $worth;
		}
	}

?>