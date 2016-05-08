<?php
error_reporting(E_ALL^E_NOTICE^E_WARNING);
session_start();
function check_user()
{
	$username  =  $_SESSION['username'];
	$email     =  $_SESSION['email'];
	$token     =  $_SESSION['token'];
	if($username && $email && $token)
	{
		//查询数据库，验证用户


		$sql      =   "SELECT * FROM `user` WHERE `email`='$email'";
		$kkk=      mysql_query($sql);
		//$sql      =    mysql_query("select * from user where username=$username"); fuck 不明白直接执行这句有什么问题 fuck the  warning
		$row      =    mysql_fetch_array($kkk);//非要多走两部 fcuk
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
