<?php

	/**
	* 
	*/
	class Attack 
	{
		public $name;
		public $damage;

		public function Attack($name, $damage)
		{
			$this->name = $name;
			$this->damage = $damage;
		}
	}

?>