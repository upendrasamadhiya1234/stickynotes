<?php

$title = "Sticky Notes App";
$comment = "test comment 1";
$comment2 = 'Tets Comment 2';
$footer = '';
$mailto = "";
$from = "";

$password = "";
$hint = "type 'pass'";

/* Database config */
$db_host	= 'localhost';
$db_user	= 'root';
$db_pass	= '';
$db_database	= 'stickynotes';

/* End config */
$db = mysqli_connect("localhost","root","","stickynotes");
//$db = new PDO($db_database) or die('Unable to establish a DB connection');
?>
