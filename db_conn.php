<?php

$sname= "sql103.unaux.com";
$unmae= "unaux_28245691";
$password = "cex29k6fj";

$db_name = "unaux_28245691_users";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}