<?php
$server="sql10.freesqldatabase.com";
$userid ="sql10338425";
$Password = "rAFRFImUYc";
$myDB = "sql10338425";$con = mysqli_connect($server,$userid,$Password,$myDB);if (mysqli_connect_errno()) {
# code...
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

?>