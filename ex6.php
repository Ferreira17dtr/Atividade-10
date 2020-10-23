<?php
$pacientes = array (
'Joana'=>20,
'Rui'=>25,
'Ana'=>30,

);

echo 'Idade do paciente Joana ' .$pacientes['Joana']. ' anos.';

?>

<br>
<br>

<?php

$pacientes['Pedro']=24;
$pacientes['Carla']=23;

foreach ($pacientes as $nome=>$idade) {
	echo 'o paciente ' .$nome. ' tem ' .$idade. ' anos.<br>';
}

?>