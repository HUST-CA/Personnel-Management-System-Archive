<?php
$con =mysql_connect('localhost','aaa','12345678');
if(!$con)
{
  die("Could not connect:".mysql_error());
}
mysql_query("set names utf8");
mysql_select_db("app_zhfskysss") or die("Could not select database");


?>
