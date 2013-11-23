//GLOBAL VARIABLES
var is_login = true; //Boolean variable use to check if user is login or a guess, false=guess, true=user's login

$(document).ready(function(){
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