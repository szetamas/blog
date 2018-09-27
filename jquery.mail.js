(function ( $ )
{
	$.fn.sending = function( options )
	{
		//default settings is that sending php file and target to write out data and problems
		var settings = $.extend
		({
			kuldo: "/post/mail.php",
			ki: this.parent(),
			hiba: this.parent()
			
		}, options );
		
		
		//send the data(input and textarea) with POST method(it is sensitive data)
		$.ajax({
				type: "POST",
				data: {input: $(this).find("input").val(), textarea: $(this).find("textarea").val()},
				url: settings.kuldo,
				success: function(valasz)
				{
					//if it is succes, write out the data
					$(settings.ki).html(valasz);
					
				},
				error: function(xmlhr)
				{
					//if it is fail, write out that it is fail and the error text/code
					$(settings.hiba).html("Hiba: "+xmlhr.status+" "+xmlhr.statusText);
				}
			});	
		
		return this;
		
	};

}( jQuery ));