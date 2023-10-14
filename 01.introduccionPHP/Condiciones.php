<?php

#Condiciones

$a =5;
$b = 10;

if($a > $b){
	echo "a es mayor que b";
} else{
	echo "b es menor";
}

echo "<br> <br>";
#Swiches

$dia = "Sabado";

switch ($dia) {
	case 'Sabado':
		echo "Voy a estudiar";
		break;
	
	default:
		echo "Voy a mimir";
		break;
}

#ciclos

$n = 1;
 
while ($n < 5) {

		echo $n; 
			$n++;
}




?>e