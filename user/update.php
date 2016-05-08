<?php
  if(!$tag) //判断登录标志
  {
      echo "<a href=\"./login.php\">Please login first.</a>";
      exit();
  }
?>



<div class="container-fluid span10 offset1" style="margin-top:50px">
    <form class="form-horizontal"  action="#" method="post" target="_self" enctype="multipart/form-data">
        <div class="control-group">
            <label class="control-label" for="username">用户名</label>
            <div class="controls">
              <input type="text" id="username" name="username" placeholder="username" class="span8">
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="password">密码</label>
            <div class="controls">
              <input type="password" id="password" name="password" placeholder="Password"  class="span8">
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="motto">人生格言</label>
            <div class="controls">
              <input type="text" id="motto" name="motto" placeholder="写一句激励自己的话吧"  class="span8">
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="image">上传头像</label>
            <div class="controls">
              <input type="file" id="image" name="image"  class="span4">
            </div>
          </div>
          <div class="control-group">
            <div class="controls">
                   <button type="submit" class="btn btn-large btn-primary reg_submit_btn" name="reg_btn">确认</button>
            </div>
          </div>
          <input type="hidden" name="update_user_sub" value="sub_confirm"/>
    </form>
</div>




<?php
  require_once('./../common/config.php');




  if($_POST['update_user_sub'] == "sub_confirm")
  {
    $username   =  $_POST['username'];
    $user_id    =  $_SESSION['user_id'];
    $password   =  $_POST['password'];
    $motto      =  $_POST['motto'];

    $username   =  trim($username);
    $password   =  trim($password);
    $motto      =  trim($motto);



          if($username){
            $sql = "UPDATE `user` SET `username`='$username' WHERE `id`=$user_id";
          }

          if($password) {
            $pwd = md5($password);
            $sql = "UPDATE `user` SET `password`='$pwd' WHERE `id`=$user_id";
          }

          if($motto) {
            $sql = "UPDATE `user` SET `motto`='$motto' WHERE `id`=$user_id";
          }

}


mysql_close($con);


echo "<script>window.location=\"./user_index.php\"</script>";

?>
