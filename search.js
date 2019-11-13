$('#search-box').keyup(function() 
{
	var searchterm = $('#search-box').val();
	if(searchterm!='')
	{
			$.post("search.php",{searchterm:searchterm},
			function(data)
			{
				$('#searchresults').html(data);
				
			});
	}
	else
	{
		$('#searchresults').html('');
	}
});