<?php
	$adr=$_POST["adr"];
	$mes=$_POST["mes"];
	
	mail("tisztalap@protonmail.com","Feedback",$mes." - Elérhetőség: ".$adr);
	
	echo "Köszönjük a visszajelzését :)";
?>