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
        if(!data['session'])
        {
            window.location.replace("index.php");
        }
        else
        {
            document.getElementById("cur_user").innerHTML = data['username'];
            var img_link = "img/users/" + data['img_src'];
            $('#cur_user_img').attr('src',img_link);
        }
    });
}

//Loads the correct sidebar on window load,
//collapses the sidebar on window resize.
// Sets the min-height of #page-wrapper to window size
$(function() {
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
