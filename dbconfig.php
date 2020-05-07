<?php

// define("server","localhost",true);
// 	define("user","root",true);
// 	define("password","",true);
// 	define("database","shopping",true);

define("server","remotemysql.com",true);
	define("user","1PUeGUa8tg",true);
	define("password","MjjEnIdwZa",true);
	define("database","1PUeGUa8tg",true);
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
	