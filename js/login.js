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