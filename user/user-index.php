<?php
require_once('../common/config.php');

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
  <div class="container-fluid">
    <div class="row-fluid">
         <div class="col-md-2"><!--左边为用户个人信息-->
            

         </div>

          <div class="col-md-10"><!--左边为信息-->
            <div class="container-fluid" style="text-align:center;">
              <?php
              //$student_info=mysql_query("select * from student where group_id=$user['manage_id'] ");//manage_id 为user管理相应类别学生信息的id标志
              $student_info=mysql_query("select * from  huiyuan");
              //$stu_io=mysql_fetch_array($student_info);
              ?>
                <div class="col-md-12">
                  <table class="table table-hover ">
                    <thead>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Tel</th>
                      <th>Email</th>
                      <th>Group</th>
                      <th>Session</th>
                      <th>Sex</th>
                    </thead>
                    <tbody>
                      <?php

                      while($stu_io=mysql_fetch_array($student_info)) { ?>
                        <tr>
                          <td class="span1"><code><?php echo $stu_io['id']; ?></code> </td>
                          <td class="span1"><?php echo $stu_io['name']; ?> </td>
                          <td class="span1"><?php echo $stu_io['tel']; ?> </td>
                          <td class="span1"><?php echo $stu_io['email']; ?> </td>
                          <td class="span1"><?php echo $stu_io['groups']; ?> </td>
                          <td class="span1"><?php echo $stu_io['session']; ?> </td>
                          <td class="span1"><?php echo $stu_io['sex']; ?> </td>

                        </tr>

                    <?php   } ?>
                    </tbody>

                  </table>


                </div>
                <div class="col-md-12">

                </div>
                <div class="col-md-12">

                </div>

            </div>

          </div>


  </div>

</div>

</body>
</html>
