<?php
	//i get it data
	$input=$_POST["input"];
	$textarea=$_POST["textarea"];

	//check mesage lengths
	if(strlen($input)>60 || strlen($textarea)>1000)
	{
		//if it is to long mesage(input or textarea) write it
		echo "Túl hosszú üzenet :/";
	}
	else
	{
		//another else send the mesage

		//max length of a line is 70
		$textarea=wordwrap($textarea,70);

		if(mail("tisztalap@protonmail.com","Feedback","$textarea \nFeladó: $input"))
		{
			//if it is not false write that thankyou
			echo "Köszönjük a visszajelzését :)";
		}
		else
		{
			//another else(false value) write that it is fail
			echo "Valami hiba történt :(";
		}
	}
?>
