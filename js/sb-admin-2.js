function islogout()
{
	$.getJSON(
			"logout.php"
	)
	.done(function(data){
		window.location.replace("index.php");
	});
}

function checkSession()
{
    $.getJSON(
            "session.php"
    )
    .done(function(data){
            document.getElementById("cur_user").innerHTML = data['username'];
            var img_link = "img/users/" + data['img_src'];
            $('#cur_user_img').attr('src',img_link);
    });
}

function newMessage(message){


}

function ViewStats()
{
    $('#patient-info').hide();
    $('#info-container').show();
    changeView("Profile");
}

function backPatientInfo()
{
    $('#patient-info').show();
    $('#info-container').hide();
}

function changeView(view){
    switch(view){
        case "Profile":
            {
                $('#admin-dropdown-text').html("Profile <span class='caret'></span>");
                $('#dropdown-header').html("<span style='display:inline;'><button class='btn btn-default btn-lg' onclick='backPatientInfo();'><span class='glyphicon glyphicon-chevron-left'></span></button></span><span style='display:inline;'><h1>Profile</h1></span>");
                $('#chat-messages').hide();
                $('#charts').hide();
                $('#customer-profile').show();
            }
            break;
        case "Stats":
            {
                $('#admin-dropdown-text').html("Stats <span class='caret'></span>");
                $('#dropdown-header').html("<h1>Stats</h1>");
                $('#chat-messages').hide();
                $('#charts').show();
                $('#customer-profile').hide();
            }
            break;
        case "Messages":
            {
                $('#admin-dropdown-text').html("Messages <span class='caret'></span>");
                $('#dropdown-header').html("<h1>Messages</h1>");
                $('#chat-messages').show();
                $('#charts').hide();
                $('#customer-profile').hide();
            }
            break;
        default:
            break;
    }
}

//Loads the correct sidebar on window load,
//collapses the sidebar on window resize.
// Sets the min-height of #page-wrapper to window size
$(function() {

    checkSession();

    $(window).bind("load resize", function() {
        topOffset = 50;
        width = (this.window.innerWidth > 0) ? this.window.innerWidth : this.screen.width;
        if (width < 768) {
            $('div.navbar-collapse').addClass('collapse')
            topOffset = 100; // 2-row-menu
        } else {
            $('div.navbar-collapse').removeClass('collapse')
        }

        height = (this.window.innerHeight > 0) ? this.window.innerHeight : this.screen.height;
        height = height - topOffset;
        if (height < 1) height = 1;
        if (height > topOffset) {
            $("#page-wrapper").css("min-height", (height) + "px");
        }
    })
});
