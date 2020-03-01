<?php
include("index.html");
if($_GET['n1']==""){
	print "Insira algum número";
	exit;
}

function anterior($n1){
	$anterior=$n1 - 1;
	return $anterior;
}
function posterior($n1){
	$posterior=$n1+1;
	return $posterior;
}
function quadrado($n1){
	$quadrado=pow($n1,2);
	return $quadrado;
}
function raiz($n1){
	$raizamento=sqrt($n1);
	return $raizamento;
}

function exibir($posterior,$anterior,$quadrado,$raizamento,$n1){
	echo "O número é: ".$n1."<br>";	
	echo "O seu posterior é: ".$posterior."<br>";
	echo "O seu anterior é: ".$anterior."<br>";
	echo "O seu quadrado é: ".$quadrado."<br>";
	$raizamento = number_format($raizamento,2, ',','.');
	echo "A raiz quadrada dele é: ".$raizamento;
	
}


$n1=$_GET["n1"];
if($n1%2==0){
	echo "O número é par.<br>";
}else{
	echo "O número é impar<br>";
}
$anterior=anterior($n1);
$posterior=posterior($n1);
$quadrado=quadrado($n1);
$raizamento=raiz($n1);
exibir($posterior,$anterior,$quadrado,$raizamento,$n1);

?>