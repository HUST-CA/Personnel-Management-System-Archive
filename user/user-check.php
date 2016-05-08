<?php
session_start();
function check_user()
{
	$username  =  $_SESSION['username'];
	$email     =  $_SESSION['email'];
	$token     =  $_SESSION['token'];
	if($username&&$email&&$token)
	{
		//查询数据库，验证用户



		$sql      =   "SELECT * FROM `user` WHERE `email`='$email'";
		$row      =    mysql_fetch_array($sql);
		//$row      =   $mysql->getLine($sql);
		$key      =   $row['token'];
		if($key == $token)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	else
	{
		return false;
	}
}
