<?php
require_once('../common/config.php');
require_once('./header.php');
?>

<html>
<head>
      <title> </title>
      <meta charset="utf-8">
      <meta http-equiv="Cache-Control" content="no-transform "/>
      <meta name="viewport" content="width=device-width, initial-scale=1,minimun-scale=1, maximum-scale=1">

     <link rel="stylesheet" type="text/css" href="./../style/css/bootstrap.min.css"/>

</head>

<body>
  <!--main page begin-->
  <div class="container-fluid">
    <div class="row-fluid">
         <div class="col-md-3"><!--左边为用户个人信息-->
           <?php require_once('./user-left.php');
           ?>
         </div>

          <div class="col-md-9"><!--右边为操作信息版面-->
            <?php  $tag = true;
                  $operate = $_GET['operate'];
                  switch ($operate) {
                    case 'list':
                      require_once("./../student/huiyuan/hy-list.php"); //更新会员信息 部员以及以上成员由更高等级管理员修改 此等级无权进行任何修改
                      break;
                     case 'edit':
                      require_once("./../student/huiyuan/hy-edit.php");
                      break;
                     case 'add':
                      require_once("./../student/huiyuan/hy-add.php");
                      break;
                     case 'delete':
                      require_once("./../student/huiyuan/hy-delete.php");
                      break;
                    case 'search':
                      require_once("./../student/huiyuan/hy-search.php");
                      break;
                    case 'update_myself':
                      require_once("./update.php");//更新管理员自己的信息
                      break;
                    case 'help':
                      require_once("./user-help.php");//操作使用帮助
                      break;
                    default:
                      require_once("./user-help.php");//默认显示操作使用帮助
                      break;
                  }
              ?>


          </div>


  </div>

</div>  <!--main page end-->

  <!--footer-->
<?php require_once('./footer.php'); ?>
</body>
</html>
