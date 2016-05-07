<?php session_start();?> //

<?php require_once("./common/config.php");?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Personnel-MS login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-transform "/>
    <meta name="keyword" content="HUSTCA   "/>
    <!-- styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">

  </head>
<body>

    <div class="container" style="height:50px;"></div>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span9 offset3">

            <div class="tabbable tabs-left">
              <ul class="nav nav-tabs">
                <li class="active"><a href="#login" data-toggle="tab">登陆</a></li>
                <li><a href="#regist" data-toggle="tab">注册</a></li>
              </ul>

            <div class="tab-content">

                <div class="tab-pane active" id="login">
                <form class="form-horizontal" action="#" method="post" target="_self">
                  <div class="control-group">
                    <label class="control-label" for="email">邮箱：</label>
                    <div class="controls">
                      <input type="text" id="email" placeholder="Email" name="email" required>
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="inputPassword">密码：</label>
                    <div class="controls">
                      <input type="password" id="inputPassword" placeholder="Password" name="password" required>
                    </div>
                  </div>
                  <div class="control-group">
                    <div class="controls">
                           <button type="submit" class="btn  btn-primary login_btn">登陆</button>
                    </div>
                  </div>
                  <input type="hidden" name="login" value="ok"/>
                  </form>
                 </div><!--login-->

                <div class="tab-pane" id="regist">
                <form class="form-horizontal" action="#" method="post" target="_self">
                <div class="control-group">
                    <label class="control-label" for="username">用户名</label>
                    <div class="controls">
                      <input type="text" id="username" name="username" placeholder="username" required>
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="Email">邮箱</label>
                    <div class="controls">
                      <input type="email"  name="Email" id="Email" placeholder="Email" required>
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="password">密码</label>
                    <div class="controls">
                      <input type="password" id="password" name="password" placeholder="Password" required>
                    </div>
                  </div>

                  <div class="control-group">
                    <div class="controls">
                           <button type="submit" class="btn  btn-primary reg_submit_btn" name="reg_btn">注册</button>
                    </div>
                  </div>
                  <input type="hidden" name="sub" value="sub_confirm"/>
                 </form>
                 </div><!--regist-->

             </div><!--tab-content-->

             </div><!--tabbable-->

            </div><!--span-->
        </div><!--row-->
    </div><!--container-fluid-->
    <!--用户名、邮箱、密码、验证码都不能为空-->
    <div id="NOT_NULL" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">提示：</h3>
    </div>
    <div class="modal-body" style="padding-top:50px; padding-bottom:50px">
    <p class="text-warning text-center warn_text">#</p>
    </div>
    <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">关闭</button>
    </div>
    </div>
</body>



<?php require_once("./functions/regist.php");?>
<?php require_once("./functions/login_check.php");?>


<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>
