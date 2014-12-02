<?php
    require 'config.inc';
    session_save_path("session");
    session_start();
    header('Content-Type: application/json');

    $reply = array();

    if($_SESSION['Login'] == false)
    {
        $reply['session'] = false;
    }
    else
    {
        $reply['session'] = true;
        $reply['username'] = $_SESSION['user'];
        $reply['img_src'] = $_SESSION['img_src'];
    }

    print json_encode($reply);
?>