<?php


define("server","sql10.freesqldatabase.com",true);
	define("user","sql10338425",true);
	define("password","rAFRFImUYc",true);
	define("database","sql10338425",true);
	function iud($query)
	{
		$cid=mysqli_connect(server,user,password,database) or die("connection error");
	$result=mysqli_query($cid,$query);
	$n=mysqli_affected_rows($cid);
	mysqli_close($cid);
	return $n;
	}
	
function select($query)
{
	$cid=mysqli_connect(server,user,password,database) or die("connection error");
	$result=mysqli_query($cid,$query);
	mysqli_close($cid);
	return $result;
}













?>
	