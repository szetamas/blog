(function ( $ )
{
	$.fn.cikks = function( options )
	{
		//default settings is that source of data(allpost.php),
		//piece of the posts(3)(if it is a NEGATIVE NUMBER then get ALL post), write post until zarotag(</h1>),
		//maxtext(0) and a html element of the max(h1)(they optional),
		//target where write succes(this), and target where write failed(this)
		var settings = $.extend
		({
			forras: "/post/allpost.php",
			cikdb: 3,
			zarotag: "</h1>",
			maxtext: 0,
			maxtextof: "h1",
			ki: this,
			hiba: this
		}, options );
		
		//requesting the data (GET method(it isn't sensitive data))
		$.ajax(
		{
				type: "GET",
				data: {db: settings.cikdb, zar: settings.zarotag},
				url: settings.forras,
				success: function(valasz)
				{
					//if it is succes, write out the data
					$(settings.ki).prepend(valasz);
					
					//if i have max
					if(settings.maxtext > 0)
					{	//take all maxtextof child
						$(settings.ki).find(settings.maxtextof).each(function()
						{	//and cut end of the text
							$(this).text($(this).text().substr(0,settings.maxtext)+"...");
						});
					}
					
				},
				error: function(xmlhr)
				{
					//if it is fail, write out that it is fail and the error text/code
					$(settings.hiba).prepend("Hiba: "+xmlhr.status+" "+xmlhr.statusText);
				}
		});	
		
		return this;
		
	};

}( jQuery ));