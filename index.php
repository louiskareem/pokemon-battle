<?php  

require 'Pokemon.php';
require 'Pikachu.php';
require 'Charmeleon.php';

	$pikachu = new Pikachu('Pikachulu');
	$charmeleon = new Charmeleon('Charmy');
	
	$pikachu->attack($pikachu->attacks[0], $charmeleon);
	// $charmeleon->attack($charmeleon->attacks[1], $pikachu);

	// print_r ($pikachu->attack($pikachu->attacks[0], $charmeleon));
	// print_r ($charmeleon->attack($charmeleon->attacks[1], $pikachu));

?>