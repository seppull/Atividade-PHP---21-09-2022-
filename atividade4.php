<?php
$valor1=54;
$valor2=78;
$valor3=1000;

$maior = 0;
$medio = 0;
$menor = 0;

if ($valor1 > $valor2) {
	echo $valor1."<br />";
	if($valor2 > $valor3){
		echo $valor2."<br />";
		echo $valor3;
	}else{
		echo $valor3."<br />";
		echo $valor2;
	};
 } else if($valor3 > $valor2){
	echo $valor3;
	if($valor2 > $valor1){
		echo $valor2."<br />";
		echo $valor1;
	}else {
		echo $valor1."<br />";
		echo $valor2;
	};
} else if($valor1 > $valor3){
	echo $valor2."<br />";
	echo $valor1."<br />";
	echo $valor3."<br />";

}else {
	echo $valor2."<br />";
	echo $valor3."<br />";
	echo $valor1."<br />";
}



// if ($valor2 < $valor1) {
// 	echo $valor2;
// }


// echo "Os números são: ".$valor1 .", " .$valor2. "  e ".$valor3


//Atividade 4

/*



*/

?>