function check()
{
	$.get('check.php', function(output)
	{
		if(output === 'true')
		{
			window.location.href = 'menu.html';
		}
	});
}

function login(user, pass, remember)
{
	$("#errors").html("");
	
	//output will return true or false
	//true if valid user false if not
	$.post('login.php', {username:user, password:pass} ,function(output)
	{
		console.log('valid login: '+ output);
		if(output === 'true')
		{
			$.post('cookie.php', {username:user, longTerm:remember});
			window.location.href = 'menu.html';
		}
		else
		{
			$("#errors").html("invalid username/password combination");
		}
	});

}

function go()
{
	var username = $("#username").val();
	var password = $("#password").val();
	var remember = $("#remember").is(':checked');
	
	console.log('remember?: ' + remember);
	
	login(username, password, remember);
}

function guest()
{
	var username = 'guest';
	var password = '1234';

	login(username, password, false);
}