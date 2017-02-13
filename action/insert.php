<?php
  include '../connect/connect.php';

  // 值存入指定變數
  $Recipient = $_POST["Recipient"];//收件人
  $Address = $_POST["Address"];//地址
  $Number = $_POST["Number"];//函件號碼

  date_default_timezone_set('Asia/Taipei');//設定時間為台北
  $datetime = date("Y-m-d");//時間
  // 值存入指定變數

  $SqlInsert = "
                INSERT INTO `package`(
                                      `recipient`,
                                      `address`,
                                      `number`,
                                      `datetime`
                                      ) VALUES (
                                      '".$Recipient."',
                                      '".$Address."',
                                      '".$Number."',
                                      '".$datetime."'
                )";
   $SqlQuery = $db->query($SqlInsert);

   if (isset($_POST["de"])) {
     $SqlDelete = "DELETE FROM `package` WHERE 1";
     $SqlQuery = $db->query($SqlDelete);
   }

  $db = null;
 ?>
<form method="post">
  <input type="submit" name="de" value="刪除">
</form>
