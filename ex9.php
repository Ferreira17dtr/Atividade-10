<?php

$minha_multa['carro'] = 'Pálio';
$minha_multa['valor'] = 178.00;

$minha_multa['carro'] .= ' ED 1.0';
$minha_multa['valor'] += 20;

foreach ($minha_multa as $nome=>$preco) {
	echo  ' ' .$nome. ' ' .$preco. '.<br>';
	echo '<br>';
}


$comidas[] = 'Lazanha';
$comidas[] = 'Pizza';
$comidas[] = 'Macarrão';

$comidas[1] = 'Pizza Calabreza';

foreach ($comidas as $nome) {
	echo  ' ' .$nome. '.<br>';
	echo '<br>';
}

?>