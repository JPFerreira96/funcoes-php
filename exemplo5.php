<?php

$a = 10;
function trocaValor(&$b){
// Passagem de parametro por referencia "& comercial". O que acontece na função você muda o valor da variável.

	$b += 50;
	return $b;


}

echo trocaValor($a);
echo "<br>";
echo trocaValor($a);
echo "<br>";
echo $a;

?>