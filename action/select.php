<?php

  include 'connect/connect.php';
  date_default_timezone_set('Asia/Taipei');//設定時間為台北

  if (isset($_GET["datetime"])) {//如果有選擇日期$datetime就等於選擇的值
    $datetime = $_GET["datetime"];
  }else {
    $datetime = date("Y-m-d");//時間
  }

  $Select = "SELECT * FROM package WHERE datetime='".$datetime."'";
  $Query = $db->query($Select);
  $Display = $Query->fetchAll();

  //顯示日期
  $SeDate = "SELECT datetime FROM package WHERE 1";
  $QuDate = $db->query($SeDate);
  $DisDate = $QuDate->fetchAll();
  //顯示日期

 ?>
