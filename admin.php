<?php
    require 'config.inc';
    session_save_path("session");
    session_start();
    if($_SESSION['Login'] == false)
    {
       header("Location:index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SeniorOk DashBoard</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="css/plugins/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

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

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top headerbar" role="navigation" style="margin-bottom: 0">
        <div class="container">
            <div class="navbar-header ">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Senior<b>Ok</b></a>
                <a class="navbar-brand navbar-brand-center" href="javascript:void(0);"><span><img src="img/seniorok-logo-small.png"></span></a>
            </div>
            <!-- /.navbar-header -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="javascript:void(0);"><span style="padding: 0px 10px 0px 0px;"><img id="cur_user_img" src=""></span><span id="cur_user"></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" onclick='islogout();'>Logout</a>
                    </li>
                </ul>
            </div>
        </div>


</div>
<!-- /.navbar-static-side -->

</nav>

<div id="page-wrapper">

    <div class="page-header" id="dropdown-header">
        <h1>Stats</h1>
    </div>
    <div class="btn-group" id="admin-dropdown">
      <button type="button" class="btn btn-default dropdown-toggle" id="admin-dropdown-text" data-toggle="dropdown" aria-expanded="false">
        Stats <span class="caret"></span>
      </button>
      <ul class="dropdown-menu" role="menu">
        <li><a href="javascript:void(0);" onclick="changeView('Profile')">Profile</a></li>
        <li><a href="javascript:void(0);" onclick="changeView('Stats');">Stats</a></li>
        <li><a href="javascript:void(0);" onclick="changeView('Messages');">Messages</a></li>
      </ul>
    </div>
    <!-- /.row -->
    <div class="row">
        <div id="charts">
            <div class="col-lg-6">
                <h3>Happiness</h3>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div id="morris-area-chart"></div>
                </div>
            </div>

            <div class="col-lg-6">
                <h3>Medication Missed</h3>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div id="morris-area-chart2"></div>
                </div>
            </div>
        </div>
        <!-- /.panel-body -->


        <!-- /.col-lg-8 -->

        <div class="chat-panel panel panel-default" id="chat-messages" style="display:none;">
            <div class="panel-heading">
                <i class="fa fa-comments fa-fw"></i>
                Chat
                <div class="btn-group pull-right">
                    <a href="#">
                        <i class="fa fa-refresh fa-fw"></i>
                    </a>
                </div>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <ul class="chat">
                    <li class="left clearfix">
                        <span class="chat-img pull-left">
                            <img src="img/users/admin.png" alt="User Avatar"
                                 class="img-circle"/>
                        </span>
                        <div class="chat-body clearfix">
                            <div class="header">
                                <strong class="primary-font">Jack Sparrow</strong>
                                <small class="pull-right text-muted">
                                    <i class="fa fa-clock-o fa-fw"></i> 12 mins ago
                                </small>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum
                                ornare dolor, quis ullamcorper ligula sodales.
                            </p>
                        </div>
                    </li>
                    <li class="right clearfix">
                        <span class="chat-img pull-right">
                            <img src="img/users/user-profilepicture-1.jpg" alt="User Avatar"
                                 class="img-circle"/>
                        </span>

                        <div class="chat-body clearfix">
                            <div class="header">
                                <small class=" text-muted">
                                    <i class="fa fa-clock-o fa-fw"></i> 13 mins ago
                                </small>
                                <strong class="pull-right primary-font">Bhaumik Patel</strong>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum
                                ornare dolor, quis ullamcorper ligula sodales.
                            </p>
                        </div>
                    </li>
                    <li class="left clearfix">
                        <span class="chat-img pull-left">
                            <img src="img/users/admin.png" alt="User Avatar"
                                 class="img-circle"/>
                        </span>

                        <div class="chat-body clearfix">
                            <div class="header">
                                <strong class="primary-font">Jack Sparrow</strong>
                                <small class="pull-right text-muted">
                                    <i class="fa fa-clock-o fa-fw"></i> 14 mins ago
                                </small>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum
                                ornare dolor, quis ullamcorper ligula sodales.
                            </p>
                        </div>
                    </li>
                    <li class="right clearfix">
                                    <span class="chat-img pull-right">
                                        <img src="img/users/user-profilepicture-1.jpg" alt="User Avatar"
                                             class="img-circle"/>
                                    </span>

                        <div class="chat-body clearfix">
                            <div class="header">
                                <small class=" text-muted">
                                    <i class="fa fa-clock-o fa-fw"></i> 15 mins ago
                                </small>
                                <strong class="pull-right primary-font">Bhaumik Patel</strong>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum
                                ornare dolor, quis ullamcorper ligula sodales.
                            </p>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- /.panel-body -->
            <div class="panel-footer">
                <div class="input-group">
                    <input id="btn-input" type="text" class="form-control input-sm" placeholder="Type your message here..."/>
                    <span class="input-group-btn">
                        <button class="btn btn-warning btn-sm" id="btn-chat">
                            Send
                        </button>
                    </span>
                </div>
            </div>
        </div>

        <div class="panel panel-info" id="customer-profile" style="display:none;">
            <div class="panel-heading">
                <h3 class="panel-title">Margaret Tan Mei Ling</h3>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-3 col-lg-3 " align="center">
                        <img alt="User Pic" src="" class="img-circle">
                    </div>
                <div class=" col-md-9 col-lg-9 ">
                    <table class="table table-user-information">
                        <tbody>
                            <tr>
                                <td>Age:</td>
                            </tr>
                            <tr>
                                <td>Date of Birth</td>
                            </tr>
                            <tr>
                                <td>Gender</td>
                            </tr>
                            <tr>
                                <td>Home Address</td>
                            </tr>
                            <tr>
                                <td>NOK Email</td>
                            </tr>
                            <tr>
                                <td>NOK Phone Number</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
              </div>
            </div>
        </div>

        <!-- /.panel .chat-panel -->

        <!-- /.col-lg-4 -->
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="js/plugins/metisMenu/metisMenu.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="js/plugins/morris/raphael.min.js"></script>
<script src="js/plugins/morris/morris.min.js"></script>
<script src="js/plugins/morris/morris-data.js"></script>

<script src="js/animatescroll.js"></script>

<!-- Custom Theme JavaScript -->
<script src="js/sb-admin-2.js"></script>

</body>

</html>

