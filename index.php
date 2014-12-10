<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SeniorOk</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top headerbar" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="javascript:void(0);" onclick="loginHide();"><span>Senior<b>Ok</b></span></a>
            <a class="navbar-brand navbar-brand-center" href="javascript:void(0);" onclick="loginHide();"><span><img src="img/seniorok-logo-small.png"></span></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="javascript:void(0);"
                       onclick="loginHide();$('#services').animatescroll({scrollSpeed:800,easing:'easeInOutQuart'});">Service</a>
                </li>
                <li>
                    <a href="javascript:void(0);"
                       onclick="loginHide();$('#about').animatescroll({scrollSpeed:800,easing:'easeInOutQuart'});">Team</a>
                </li>
                <li>
                    <a href="javascript:void(0);"
                       onclick="loginHide();$('#contact').animatescroll({scrollSpeed:800,easing:'easeInOutQuart'});">Contact
                        Us</a>
                </li>
                <li>
                    <a href="javascript:void(0);" onclick="loginShow();">Login</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<!-- Header -->
<div id="main">
    <div class="intro-header">

        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1>SeniorOk</h1>
                        <h3>Empowering connections with data insight</h3>
                        <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                            <li>
                                <a href="javascript:void(0);"
                                   onclick="$('#services').animatescroll({scrollSpeed:800,easing:'easeInOutQuart'});"
                                   class="btn btn-default btn-lg"><span class="network-name">Learn More </span><i
                                        class="fa fa-angle-right"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.intro-header -->

    <!-- Page Content -->

    <div class="content-section-a">

        <div class="container">
            <section id="services">
                <div class="row">
                    <div class="col-lg-5 col-sm-6">
                        <hr class="section-heading-spacer">
                        <div class="clearfix"></div>
                        <h2 class="section-heading">Our Service</h2>
                        <p class="lead">SeniorOk empowers family and day centres to connect and care for their loved
                            ones together. No longer should families need to worry about being out of touch with their
                            family members living away from them. With SeniorOk and its real time updates on your kin’s
                            activities, mood and medication routine, you would always be kept in the loop.</p>
                    </div>
                    <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                        <img class="img-responsive" src="img/mockup.png" alt="">
                    </div>
                </div>
            </section>
        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->

    <div class="content-section-b">

        <div class="container">
            <section id="about">
                <div class="row about">
                    <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
                        <hr class="section-heading-spacer">
                        <div class="clearfix"></div>
                        <h2 class="section-heading">The Team</h2>

                        <p class="lead">Our mission is to improve the lives of elderly and to enhance channels for
                            relationship building.</p>
                    </div>
                    <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                        <img class="img-responsive" src="img/team.png" alt="">
                    </div>
                </div>
            </section>
        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-b -->

    <div class="content-section-a">

        <div class="container">
            <section id="contact">
                <div class="row">
                    <div class="col-lg-5 col-sm-6">
                        <hr class="section-heading-spacer">
                        <div class="clearfix"></div>
                        <h2 class="section-heading">Contact Us</h2>

                        <p class="lead">For all other general enquiries, Just click the button below</p>
                        <ul class="list-inline intro-social-buttons">
                            <li>
                                <a href="javascript:void(0);" class="btn btn-default btn-lg"><span class="network-name">Contact Us   </span><i
                                        class="fa fa-phone"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
        </div>
        <!-- /.container -->
    </div>
    <!-- /.content-section-a -->
</div>

<div id="login">
    <div class="login-header" id="loginheader">
        <div class="login-message">
            <h1>Hello.</h1>

            <h3>Connecting your loved ones together </h3>
            <hr class="intro-divider">
            <ul class="list-inline intro-social-buttons">
                <li>
                    <a onclick="loginPanelShow();" class="btn btn-success btn-lg btn-block">Login</a>
                </li>
            </ul>
        </div>
        <!-- /.container -->
    </div>
    <div class="container" id="loginpanel">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Please Sign In</h3>
                </div>
                <div class="panel-body">
                    <form role="form">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" id="_email" placeholder="E-mail" type="email" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="_password" placeholder="Password" type="password">
                            </div>
                            <!--<div class="checkbox">
                                <label>
                                    <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                </label>
                            </div>-->
                            <ul class="list-inline intro-social-buttons">
                                <li>
                                    <input class="btn btn-primary" id="submitbutton" type="button" value="Login" name="submit" onclick='loginRequest($("#_email").val(), $("#_password").val());'/>
                                </li>
                                <li>
                                    <input class="btn btn-default" id="submitbutton" type="button" value="Register" name="submit" onclick=''/>
                                </li>
                            </ul>
                            <div id="comments">
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->
</div>

<!-- Footer -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Animate Scrolling JavaScript -->
<script src="js/animatescroll.js"></script>

<script src="js/login.js"></script>

</body>

</html>
