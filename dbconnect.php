<?php
$server="localhost";
$userid ="root";
$Password = "";
$myDB = "shopping";$con = mysqli_connect($server,$userid,$Password,$myDB);if (mysqli_connect_errno()) {
# code...
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

?>