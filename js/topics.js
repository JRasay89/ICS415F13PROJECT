//GLOBAL VARIABLES
var is_login = false; //Boolean variable use to check if user is login or a guess, false=guess, true=user's login

$(document).ready(function(){
  if (is_login) {
	$("#new_topic").show();
  }
  else {
	$("#new_topic").hide();
  }
});