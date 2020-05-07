<?php
// $server="localhost";
// $userid ="root";
// $Password = "";
// $myDB = "shopping";

$server="remotemysql.com";
$userid ="1PUeGUa8tg";
$Password = "MjjEnIdwZa";
$myDB = "1PUeGUa8tg";
$con = mysqli_connect($server,$userid,$Password,$myDB);if (mysqli_connect_errno()) {
# code...
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

?>