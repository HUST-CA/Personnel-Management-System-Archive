<head>
	<title> </title>
	<meta charset="utf-8">
	<meta http-equiv="Cache-Control" content="no-transform "/>
	<meta name="viewport" content="width=device-width, initial-scale=1,minimun-scale=1, maximum-scale=1">

</head>


<?php
  error_reporting(E_ALL^E_NOTICE^E_WARNING);
	require_once("./../common/config.php");

	if($_POST['login'] == "ok"){

	    //获取邮箱地址和密码
  		$email    = $_POST['email'];
  		$password = $_POST['password'];

			//对特殊字符进行过滤
			$email    = htmlspecialchars(trim($email));
			$password = htmlspecialchars(trim($password));

		//查询数据库，验证用户
      $sql  =    mysql_query("SELECT * FROM user WHERE email='$email' ");//user数据库表
  		//$row  =   $mysql->getLine($sql);
			$row = mysql_fetch_array($sql);
			$pwd      =   $row['password'];
			$username =   $row['username'];
			$token    =   $row['token'];
			$key      =   md5(md5($password)."qianshou");



  			if($pwd == $key){

				//	$login_message = "<a href=\"./user_index.php\"><button class=\"btn btn-success btn-large\">登陆成功，点击进入系统</button>";

					echo "<div class=\"col-md-12\" style=\"text-align:center\" id=\"success\"> <a href=\"./../user/user-index.php\" style=\"text-align:center; \"> 登陆成功，正在进入系统</a></div>";
          echo "<script> setTimeout(window.location.href='./../user/user-index.php',5); </script>" ;
					$_SESSION['user_id']  =  $row['id'];
					$_SESSION['username'] =  $row['username'];
					$_SESSION['email']    =  $row['email'];
					$_SESSION['token']    =  $row['token'];
  		  }
				else
				echo "<div class=\"col-md-12\" style=\"text-align:center\"  > <a href=\"./../user/login.php\" style=\"text-align:center; \"> 密码错误 返回重新登录</a></div>";
        //echo "<script> alert(' 对不起, 密码错误!\n  单击“确定”重写登录');location.href= './../user/login.php'</script>";
        echo "<script> setTimeout(window.location.href='./../user/login.php',5); </script>" ;


}
?>
