<?php

$pessoa  = array(
	'nome'=>'Júlio',
	'idade'=> 25
);
foreach ($pessoa as &$value) {

	if (gettype($value) === 'integer') $value += 10;

	echo $value. "<br>";
}

print_r($pessoa);

?>