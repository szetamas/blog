$(document).ready(function()
{	///they are mail textboxes
	$("#elerh").keyup(function()
	{	//calculate remaining characters
		$(this).prev().text("Elérhetőség(opcionális)("+(parseInt($(this).attr("maxlength"))-parseInt($(this).val().length))+")");
	});
	
	$("#uzenet").keyup(function()
	{
		$(this).prev().text("Üzenet("+(parseInt($(this).attr("maxlength"))-parseInt($(this).val().length))+")");
	});
	///push the send button
	$("#send").click(function()
	{	///it is the mail sending
		$("#mes").sending
		({
			
		});
	});
});