<?php
session_start();
	include("../../vars.php");
    session_unset();
    session_destroy();
?>