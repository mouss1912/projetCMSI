<?php
session_start();
	include("../../vars.php");
    //include("../../session_sql/database.class.php");  //Include MySQL database class
    //include("../../session_sql/mysql.sessions.php");  //Include PHP MySQL sessions
    //$session = new Session();
    session_unset();
    session_destroy();
?>