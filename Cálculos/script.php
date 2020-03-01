<?php

include("index.html");

$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$n3 = $_POST['n3'];
$n4 = $_POST['n4'];
$n5 = $_POST['n5'];
$n6 = $_POST['n6'];
$n7 = $_POST['n7'];
$n8 = $_POST['n8'];
$n9 = $_POST['n9'];
$n10 = $_POST['n10'];

$total = $n1 + $n2 + $n3 + $n4 + $n5 + $n6 + $n7 + $n8 + $n9 + $n10;

echo $total; 

if($total >= 0 && $total <=4){
	echo ", por favor tente novamente!!!";
}elseif($total >= 5 && $total <=7){
	echo " é insuficiente!!!";
}elseif($total = 8 && $total <=9){
    echo " é Bom!!!";    
}elseif($total <= 10){
	echo " é Otimo!!!";
}
?>