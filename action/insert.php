<?php
  include '../connect/connect.php';

  // 值存入指定變數
  $Recipient = $_POST["Recipient"];//收件人
  $Address = $_POST["Address"];//地址
  $Number = $_POST["Number"];//函件號碼

  date_default_timezone_set('Asia/Taipei');//設定時間為台北
  $datetime = date("Y/m/d/");//時間
  // 值存入指定變數

  //確認是否都有值or都不為空
  $true = isset($Recipient) && !empty($Recipient)&&
          isset($Address) && !empty($Address)&&
          isset($Number) && !empty($Number);
  //確認是否都有值or都不為空

  if ($true) {
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
    $TrueQu = $SqlQuery = $db->query($SqlInsert);

    if ($TrueQu) {
      echo "
            <script>
              alert('新增成功');
              document.location.href='../index.php';
            </script>
            ";
    }
  }

   if (isset($_POST["de"])) {
     $SqlDelete = "DELETE FROM `package` WHERE 1";
     $SqlQuery = $db->query($SqlDelete);
     header("Location:../index.php");
   }

  $db = null;
 ?>
