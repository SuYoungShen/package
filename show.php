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
  </head>
  <body>
    <?php
      include 'action/select.php';
     ?>
    <div class="container-fluid">
      <form class="form-horizontal" role="form" method="get">
        <div class="form-group">
          <div class="dropdown">
            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
              選擇日期
              <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
              <?php
                foreach ($DisDate as $key => $value) {
                  $v = $value["datetime"];
                  echo "
                  <li role='presentation'>
                    <a role='menuitem' tabindex='-1' href='show.php?datetime=$v'>$v</a>
                  </li>
                  ";
                }
               ?>
            </ul>
          </div>
        </div>
      </form>

      <div class="table-responsive">
        <table class="table table-hover table-bordered">
          <thead>
            <tr>
              <td><?php echo $datetime; ?></td>
              <td>收件人</td>
              <td>寄件人地址</td>
              <td>函件號碼</td>
              <td>簽章</td>
            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($Display as $key => $value) {
              $Recipient = $value["recipient"];//收件人
              $Address = $value["address"];//地址
              $Number = $value["number"];//函件號碼
             ?>
            <tr>
              <td></td>
              <td><?php echo $Recipient; ?></td>
              <td><?php echo $Address; ?></td>
              <td><?php echo $Number; ?></td>
              <td></td>
            </tr>
            <?php
              }
             ?>
          </tbody>
        </table>
        <a href="index.php"><button type="button" class="btn btn-default" name="button">返回</button></a>
      </div>
    </div>

    <?php
      $db = null;
     ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
