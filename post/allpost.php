<?php
	$db=$_GET["db"];		//get piece of posts
	$zar=$_GET["zar"];		//last element of reading

	$dirtxt=glob("*.txt");		//list all txt into the dirtxt

	if($db<0)		//if db (cikdb) less than 0 (-1,-2 etc(negative nums))
	{
		$db=sizeof($dirtxt);	//then I need ALL txt
	}

	for($cv=sizeof($dirtxt)-1;$cv>=sizeof($dirtxt)-$db && $cv>=0;$cv--)
	{
		//loop from last element to fisrt element(or db piece) (reverse)
		$namewof=substr($dirtxt[$cv],0,strpos($dirtxt[$cv],".txt"));		//name WithOut Format(txt)
		$str1="<a href=\"/post/post.php?name=$namewof\">";	//i create <a> tag and put in to the href atr with GET value
		$filread=fopen($dirtxt[$cv],"r");		//open read (filepointer at the beginning)
		$strpuf=fread($filread,filesize($dirtxt[$cv]));		//read txt
		fclose($filread);	//close file

		//put in the output string, the txt selected piece(from zero char to the selected html tag(example:</p>))(+ the last html tag size)
		$str1.=substr($strpuf,0,(strpos($strpuf,$zar)+strlen($zar)));
		$str1.="</a>";		//close <a> tag
		echo $str1;		//write out the string
	}
?>
