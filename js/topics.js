//GLOBAL VARIABLES
var is_login = true; //Boolean variable use to check if user is login or a guest, false=guest, true=user's login



$(document).ready(function(){
	//needed to use a document.ready function to do
	//this check as soon as possible so i put it here
	$.ajax(
	{
		type:'get',
		cache:false,
		async:false,
		url:'check.php',
		success:function(output)
		{
			//will return guest or a username
			if(output === 'guest')
			{
				is_login = false;
			}
			else
			{
				is_login = true;
			}

		}
	});

   //If true show new topic button, else hide
  if (is_login) {
	$("#new_topic").show();
  }
  else {
	$("#new_topic").hide();
  }
  //Shows the form 
  $("#btn_topic").click( function () {
	$("#form_topic").show();
  });
  //Resets value of form and hide it
  $("#btn_form_cancel").click( function () {
	$("#inputTitle").val("");
	$("#inputMessage").val("");
	$("#form_topic").hide();
  });
});