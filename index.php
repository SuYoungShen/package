<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <?php
      include 'connect/connect.php';
     ?>
     <script type="text/javascript">
       $(document).ready(function() {


         //當焦點不在指定上,會進行以下程式
         $("#Recipient").blur(function() {
          Recipient = $("#Recipient").val();
           if (Recipient == "") {
             $(this).css('border-color', 'red');
           }else {
             $(this).css('border-color', 'green');
           }

         });

         $("#Address").blur(function() {
           Address = $("#Address").val();
           if (Address == "") {
             $(this).css('border-color', 'red');
           }else {
             $(this).css('border-color', 'green');
           }
         });

         $("#Number").blur(function() {
           Numbers = $("#Number").val();
           if (Numbers == "") {
             $(this).css('border-color', 'red');
           }else {
             $(this).css('border-color', 'green');
           }
         });

         //當焦點不在指定上,會進行以下程式

         //當按送出時,會進行以下程式
         $("form").submit(function() {
           if (Recipient == "") {
             alert("收件人不能為空");
             return false;//回傳false就不會跳到下頁
           }else if (Address == "") {
             alert("地址不能為空");
             return false;//回傳false就不會跳到下頁
           }else if (Numbers == ""){
             alert("郵件號碼不能為空");
             return false;//回傳false就不會跳到下頁
           }
         });
         //當按送出時,會進行以下程式
       });

     </script>
  </head>
  <body>
    <form class="form-horizontal" role="form" action="action/insert.php" method="post">
      <!--Recipient收件人-->
      <div class="form-group">
        <label for="Recipient" class="col-sm-2 control-label">收件人</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" name="Recipient" id="Recipient" placeholder="輸入收件人">
        </div>
      </div>
      <!-- Address 地址-->
      <div class="form-group">
        <label for="Address" class="col-sm-2 control-label">輸入寄件人地址</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" name="Address" id="Address" placeholder="輸入寄件人地址">
        </div>
      </div>
      <!-- Number 郵件號碼-->
      <div class="form-group">
        <label for="Number" class="col-sm-2 control-label">函件號碼</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" name="Number" id="Number" placeholder="函件號碼">
        </div>
      </div>
      <!-- Signature 簽章 -->
      <!-- <div class="form-group">
        <label for="Signature" class="col-sm-2 control-label">簽章</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" id="Signature" placeholder="簽章">
        </div>
      </div> -->
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" id="submit" class="btn btn-default">送出</button>
          <a href="show.php">
            <button type="button" class="btn btn-default">搜尋</button>
          </a>
          <form method="post" action="insert.php">
            <button type="submit" name="de" class="btn btn-default">刪除</button>
          </form>
        </div>
      </div>
    </form>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
