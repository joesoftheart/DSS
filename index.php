<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
<title>ระบบการตัดสินใจ</title>
 <!-- Bootstrap core CSS -->
    <link href="bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap-3.3.4-dist/css/bg.css">

    <!-- Custom styles for this template -->
    <link href="navbar.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="bootstrap-3.3.4-dist/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <style>
  .jum {
background-image: url(img/seed.png);
background-size: cover;}
  
  
  
  </style>
  </head>

  <body class="fullscreen background" style="background-image:url(img/bg_rice.jpg);" data-img-width="1600" data-img-height="1064">

    <div class="container">

      <!-- Static navbar -->
      <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">หน้าแรก</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li ><a href="index.php?id=1">ระบบเลือกพันธุ์ข้าว</a></li>
              <li ><a href="index.php?id=2">ระบบเลือกพื้นที่ปลูกข้าว</a></li>
              <li ><a href="index.php?id=3">ระบบคำนวนปุ๋ยและยา</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">E-Learning<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="questionarea/question-area.php">โรคข้าว</a></li>
                  <li><a href="#">กฏหมายเกี่ยวข้องกับข้าว</a></li>
                </ul>
              </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li ><a href="gis.php">ระบบ GIS<span class="sr-only">(current)</span></a></li>
              <li><a href="call.php">ติดต่อ</a></li>
              <li><a href="#">Fixed top</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>

      <!-- Main component for a primary marketing message or call to action -->
      
      <div class="jumbotron bg-info jum">
      <h1>ระบบตัดสินใจ</h1>
      <p>ระบบสนับสนุนการตัดสินใจในการเลือกพันธุ์ข้าวที่เหมาะสม</p>
      
      </div >
 		<div class="list-group col-md-3">
 			 <a href="#" class="list-group-item disabled">มีปัญหาหรือต้องการทราบข้อมูลด้านได</a>
  			 <a href="management/index-manage.php" class="list-group-item">การปลูก ดูแลรักษา และใช้ปุ๋ยในนาข้าว</a>
 			 <a href="disease/index-disease.php" class="list-group-item">ศัตรูข้าว และการป้องกันกำจัด</a>
 			 <a href="weed/index-weed.php" class="list-group-item">วัชพืชในนาข้าว</a>
 			 <a href="seed/index-seed.php" class="list-group-item">เมล็ดพันธุ์ และการผลิตเมล็ดพันธุ์ข้าว</a>
             <a href="postharvest/index-postharvest.php" class="list-group-item">วิทยาการก่อน และหลังการเก็บเกี่ยวข้าว</a>
 			 <a href="product/index-product.php" class="list-group-item">ผลิตภัณฑ์จากข้าว และบรรจุภัณฑ์</a>
 			 <a href="machine/index-machine.php" class="list-group-item">เครื่องจักรกลการเกษตร</a>
        </div> 
        <?php error_reporting( error_reporting() & ~E_NOTICE ); ?>
        <?php if (($_GET["id"])=="1") {?>
        <?php include('page.php')?>

<?php } else if (($_GET["id"])=="2") {?>
<?php include('page1.php') ?> 


<?php } else if(($_GET["id"])=="3") { ?>
<?php include('page4.php') ?> 


<?php } else { ?>
<?php include('page3.php') ?>
<?php } ?>
        </div>
    </div>
       
    <?php include "footer.php" ?>   
    </div> <!-- /container -->
    
    
   


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
    <script src="bootstrap-3.3.4-dist/css/offcanvas.css"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="bootstrap-3.3.4-dist/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>