$().ready(function(){
	$("#html_details").toggle();
	$("#javascript_details").toggle();
	$("#bootstrap_details").toggle();
	$("#php_details").toggle();

	
	$("#html").click(function(){
		$("#html_details").toggle();
	});
	$("#javascript").click(function(){
		$("#javascript_details").toggle();
	});
	$("#bootstrap").click(function(){
		$("#bootstrap_details").toggle();
	});
	$("#php").click(function(){
		$("#php_details").toggle();
	});
});