$(document).ready(function()
{
	$.ajax(
	{
		type:'get',
		cache:false,
		async:false,
		url:'check.php',
		success:function(output)
		{
			//will return false or a username
			//but if this is used on a page that isn't the home page
			//then it should never get false
			$("#welcome_message").html("Welcome, " + output);
		}
	});

});