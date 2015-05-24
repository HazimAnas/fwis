<?php
/*
Filename : logout.php
Purpose : To logout from the website and destroy self identity.
*/
//Start session
session_start();

//unset the variables stored in session
session_destroy();
header("location: index.php");

?>