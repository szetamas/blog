<?php
$db=$_GET["db"];		//get it values
$zar=$_GET["zar"];		//i catch it datas
$atr=$_GET["atr"];		//and atribute
$val=$_GET["val"];		//and his value
if($atr=='0' || $val=='0')		//if atr and val is zero(they weren't in fucntion call)
{
	$fullatr="";		//empty string
}
else
{
	$fullatr=$atr.'="'.$val.'"';		//i create a html atribute
}
$dirtxt=glob("*.txt");		//list all txt into the dirtxt
if($db<1)		//if db (cikdb) less than 1 (0, -1 etc)
{
	$db=sizeof($dirtxt);	//then I need ALL txt
}
for($cv=sizeof($dirtxt)-1;$cv>=sizeof($dirtxt)-$db && $cv>=0;$cv--)
{
		//loop from last element to fisrt element(or db piece) (reverse)
		$namewof=substr($dirtxt[$cv],0,strpos($dirtxt[$cv],".txt"));		//name WithOut Format(txt)
		$str1='<a '.$fullatr.' name="'.$namewof.'" href="/post/post.php?name='.$namewof.'">';	//i create <a> tag and put in to the text with GET value and etc
		$filread=fopen($dirtxt[$cv],"r");		//open read (filepointer at the beginning)
		$strpuf=fread($filread,filesize($dirtxt[$cv]));		//read txt
		fclose($filread);	//close file
		$str1.=substr($strpuf,0,(strpos($strpuf,$zar)+strlen($zar)));
		//put in the output string, the txt selected piece(from zero char to the selected html tag(example:</p>))(+ the last html tag size)
		$str1.="</a>";		//close <a> tag
		echo $str1;		//write out the string
}
?>
