<?php
	require_once("./../common/config.php");

	if($_POST['login'] == "ok"){

	    //获取邮箱地址和密码
  		$email    = $_POST['email'];
  		$loginpassword = $_POST['password'];

		//查询数据库，验证用户
      $sql  =    mysql_query("SELECT * FROM `user` WHERE `email`='$email' ");//user数据库表
  		$row  =   $mysql->getLine($sql);


  		if($row)
      {
  			$username =   $row['username'];
  			$pwd      =   $row['password'];
  			if($loginpassword == $pwd){
           $login_message = "<a href=\"./user_index.php\"><button class=\"btn btn-success btn-large\">登陆成功，点击进入系统</button>";
  				}
  			else
  				$login_message = "用户名或密码错误";
  		  }
  		else
  		{
  			$login_message = "用户不存在，<a href="./functions/register.php">点击此处注册</a>";
  		}
		$mysql->closeDb();
?>


<?php
	}
?>


<!--login_message -->
<script>
	$(".warn_text").html('<?php echo $login_message;?>');
	$('#NOT_NULL').modal();
</script>
