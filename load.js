function load(cikdb, zarostr, where, atr, val)
{	////if cikdb less than 1, return ALL txt, zarostr the last string in the reading, and atribute(example:class) and his value
	if(atr === undefined)		//atr parameter is'nt neccessary
	{
		atr=0;
	}
	if(val === undefined)		//val too
	{
		val=0;
	}
	var xmlhttpreq = new XMLHttpRequest();
	xmlhttpreq.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200)		//if the ready is 4(req is done and res is ready) AND status is 200 
	{
		document.getElementById(where).innerHTML+=this.responseText;		//text into an out tag
	}
	};
	xmlhttpreq.open("GET","/post/allpost.php?db="+cikdb+"&zar="+zarostr+"&atr="+atr+"&val="+val, true);		//send req to the php(response will be some post's some string)
	xmlhttpreq.send();
}
