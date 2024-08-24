<!DOCTYPE html>
<html lang="zh">

<head>
  <title>xxxx</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="zzz" />
  <meta name="keywords" content="" />
  <meta name="author" content="Colin Zhao" />
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
  <meta name="format-detection" content="telephone=no" />
  <!--Load bootstrap library and JQuery-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>-->
  <!--[if lt IE 9]>-->
  <!--<script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>-->
  <!--<![endif]-->
  <link href='https://fonts.googleapis.com/css?family=Gudea' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="./style.css" />
</head>

<body>
  <?php include('../../cz-components/headers/center-vertical.php'); ?>
  <?php include('../../cz-components/hero/simple.php'); ?>
  <div class="sep"></div>
  <?php include('../../cz-components/paragraphs/home-intro.php'); ?>
  <div class="sep"></div>

  <div class="container">
    <?php include('../../cz-components/grids/horizontal.php'); ?>
  </div>

  <div class="sep"></div>

  <div class="container">
    <?php include('../../cz-components/latest-posts/two-columns.php'); ?>
  </div>

  <div class="sep"></div>

  <?php include('../../cz-components/footers/dark-info.php'); ?>
</body>

</html>