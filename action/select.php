<?php

  include 'connect/connect.php';
  date_default_timezone_set('Asia/Taipei');//設定時間為台北

  if (isset($_GET["datetime"])) {//如果有選擇日期$datetime就等於選擇的值
    $datetime = $_GET["datetime"];
  }else {
    $datetime = date("Y-m-d");//時間
  }

  //以日期當條件,取得全部資料
  $Select = "SELECT * FROM package WHERE datetime='".$datetime."'";
  $Query = $db->query($Select);
  $Display = $Query->fetchAll();
  //以日期當條件,取得全部資料

  //顯示日期
  $SeDate = "SELECT datetime FROM package GROUP BY datetime";
  $QuDate = $db->query($SeDate);
  $DisDate = $QuDate->fetchAll();
  //顯示日期

 ?>
