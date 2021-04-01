<?php

$sname= "sql209.unaux.com";
$unmae= "unaux_28248686";
$password = "z92wgu3uzm5mo";

$db_name = "unaux_28248686_users";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}