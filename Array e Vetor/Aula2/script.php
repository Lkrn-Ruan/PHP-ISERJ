<?php
include("index.html");
$clube[0]="Vas";
$clube[1]="Ola";
$clube[2]="Port";
$clube[3]="Fla";
$clube[4]="Ame";
for($i=0;$i<=4;$i++)
	for($j=$i+1;$j<=4;$j++)
		if($clube[$i]>$clube[$j]){
			$aux=$clube[$i];
			$clube[$i]=$clube[$j];
			$clube[$i]=$aux;
		}
		//Exibição;
		for($i=0;$i<5;$i++){
			print "<tr><td>Posição $i do vetor: </tr>";
			print "é $clube[$i]<br/>";
		}
	












?>