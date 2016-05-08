<?php
session_start();
require_once('./../common/config.php');
?>

<html>
<head>
      <title><?php echo $title;?></title>
      <meta charset="utf-8">
      <meta http-equiv="Cache-Control" content="no-transform "/>
      <meta name="viewport" content="width=device-width, initial-scale=1,minimun-scale=1, maximum-scale=1">

     <link rel="stylesheet" type="text/css" href="style/css/bootstrap.min.css"/>

</head>

<body>
    <div class="container-fluid">
      <div class="col-md-12">
        <h2>PMS 管理登录</h2>
      </div>

    </div>
    <div class="container-fluid">
      <div class="col-md-12" style="text-align:center">
        <form class="form-horizontal" role="form" action="#" method="post" target="_self">
        				<div class="form-group">
        					<label for="inputEmail3" class="col-sm-2 control-label">邮箱</label>
        					<div class="col-sm-10">
        						<input class="form-control"  type="email" id="email" placeholder="Email" name="email" required>
        					</div>
        				</div>
        				<div class="form-group">
        					<label for="inputPassword3" class="col-sm-2 control-label">密码</label>
        					<div class="col-sm-10">
        						<input class="form-control"  type="password" id="inputPassword" placeholder="Password" name="password" required>
        					</div>
        				</div>
                <div class="control-group">
                        <div class="controls">
                               <button type="submit" class="btn  btn-primary login_btn">登陆</button>
                        </div>
                </div>
               <input type="hidden" name="login" value="ok"/>
        </form>
        <div class="form-group">
          <div class="controls">
            <button type="button"  class="btn  btn-primary"><a href="./../functions/forgetpwd.php">找回密码</a></button>
          </div>
          <div class="controls">
            <button type="button" class="btn  btn-primary "><a href="./../functions/register.php">管理注册</a></button>
          </div>

        </div>




      </div>



    </div>
</body>
</html>
<script src="style/js/jquery.min.js"></script>
<script src="style/js/bootstrap.min.js"></script>

<?php require_once("./../functions/login_check.php");?>
