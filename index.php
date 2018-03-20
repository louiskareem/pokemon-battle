<?php  

require 'Pokemon.php';
require 'Pikachu.php';
require 'Charmeleon.php';

	$pikachu = new Pikachu('Pikachu', 'Lighting', 60);
	$pikachu->weakness = ['Fire', 1.5];
	$pikachu->attacks = ['electricRing', 50, 'pikaPunch', 20];
	$pikachu->resistance = ['Fighting', 20];

	return $pikachu;
?>