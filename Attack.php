<?php

	/**
	* Class for Attack
	*/
	class Attack 
	{
		public $name;
		public $damage;

		/**
		 * @param [type] $name   [description]
		 * @param [type] $damage [description]
		 */
		public function __construct($name, $damage)
		{
			$this->name = $name;
			$this->damage = $damage;
		}
	}

?>