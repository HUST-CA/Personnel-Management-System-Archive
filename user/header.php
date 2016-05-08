<?php session_start(); ?>
<?php require_once("./user-check.php");?>
<?php
	if(!check_user())
	{
    echo "<script> alert('请先登录!!! \\n 单击“确定”返回登录页');location.href= './login.php'; </script>" ;
      exit();
	}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title> </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Le styles -->
    <link href="./../style/css/bootstrap.css" rel="stylesheet">
    <link href="./../style/css/bootstrap-responsive.min.css" rel="stylesheet">
		<link href="./../style/css/docs.css" rel="stylesheet">

	<script src="./../style/js/jquery.js"></script>
	<script src="./../style/js/bootstrap.min.js"></script>

</head>
 <body>

<div class="container-fluid">
	<div class="col-md-12">

	</div>

</div>
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <div class="row-fluid">
              <div class="span2">
             	 <a href="./user-index.php" style="color:white;"><h4>PMS</h4></a>
              </div>
              <div class="span2">
              	<a href="./user-index.php?operate=add" style="color:white;"><h4>添加信息</h4></a>
              </div>
              <div class="span2">
              	<a href="./user-index.php?operate=edit" style="color:white;"><h4>修改信息</h4></a>
              </div>
							<div class="span2">
              	<a href="./user-index.php?operate=delete" style="color:white;"><h4>删除信息</h4></a>
              </div>
							<div class="span2">
              	<a href="./user-index.php?operate=search" style="color:white;"><h4>搜索信息</h4></a>
              </div>
              <div class="span2 ">
              	<h4><a href="" style="color:white"><?php echo $_SESSION['username'];?></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="./fun/logout.php"><i class="icon-off icon-white"></i></a></h4>
              </div>
          </div>
        </div>
      </div>
    </div>
