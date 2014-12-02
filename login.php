<?php
    require 'config.inc';
    session_save_path("session");
	session_start();
	header('Content-Type: application/json');
	$_SESSION['Login'] = false;

    // Create connection
    $conn = mysql_connect($servername, $username, $password);

    $reply = array();

    // Check connection
    if (!$conn) {
        $reply["status"] = "Database connection failed";
    }
    else
    {
        $reply["status"] = "Database connection pass";

        $user = $_REQUEST["user"];
        $pass = $_REQUEST["pass"];

         $reply["user"] = $user;

        if(isset($user)&&isset($pass))
        {
            $sql = 'SELECT username, password, email FROM users';
            mysql_select_db('seniorok');
            $retval = mysql_query( $sql, $conn );
            if(! $retval )
            {
                $reply["database"] = "Query failed";
                die('Could not get data: ' . mysql_error());
            }

            $reply["login"] = false;
            while($row = mysql_fetch_assoc($retval))
            {
                if (($row['email'] == $user) && ($row['password'] == $pass))
                {
                    $reply["login"] = true;
                    $_SESSION['Login'] = true;
                }
            }
        }
    }
    mysql_close($conn);
    print json_encode($reply);
?>