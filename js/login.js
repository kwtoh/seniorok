function loginShow(){
	$('#main').hide();
	$('#login').show();
	$('#footer').hide();
}

function loginHide(){
	$('#login').hide();
	$('#main').show();
	$('#footer').show();
}

function loginPanelShow(){
	$('#loginheader').hide();
	$('#loginpanel').show();
}

function loginRequest(username,password){
	// Ajax request goes here...
	$.getJSON(
			"login.php",
			{
				user : username,
				pass : password
			})
			.done(function(data){
				loginSuccess(data);
	});

}

function loginSuccess(value)
{
	if(value['login'])
	{
		window.location.replace("admin.php");
	}
	else if(!value['login'])
	{
		document.getElementById("comments").innerHTML = "Login Failed";
	}
}

$(function(){
	// Setup all events here and display the appropriate UI
	$("#login").hide();
});