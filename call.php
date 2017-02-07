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
<style>
  .jum {
background-image: url(img/bg-call.jpg);
background-size: cover;}
  
  
  
  </style>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  
  </head>

  <body class="fullscreen background" style="background-image:url(img/bg_rice.jpg);" data-img-width="1600" data-img-height="1064">

    <div class="container"  >

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
		<div class="jumbotron bg-info jum" style="font-size:18px;">
        <table>
        <tr>
        <td width="40%">
       <img src="img/joe.jpg" class="img-thumbnail" width="450" height="600" />
       </td>
       <td width="10%"></td>
       <td><b>ชื่อ</b><br>
       นายจิรนันท์ ขุนอินทอง<br><br>

<b>วันเกิด</b><br>
        24 พศจิกายน พ.ศ.2535<br><br>

<b>การศึกษา</b><br>
        ระดับประถมศึกษาโรงเรียนสุ่งเจริญบ้าน<br>

        ระดับมัธยมศึกษา โรงเรียนสนามชัยเขต<br>

        ระดับปริญญาตรีกำลังศึกษาอยู่ คณะวิทยาศาสตร์ สาขาวิทยาการคอมพิวเตอร์ มหาวิทยาลัยราชภัฏสวนสุนันทา<br><br>
                
<b>งานอดิเรก</b><br>
       เขียนเว็บไซต์และศึกษาเกี่ยวกับเทคโนโลยีใหม่ๆ<br><br>

<b>จุดประสงค์ในการสร้างเว็บไซต์ระบบสนับสนุนการตัดสินใจเลือกพันธ์ข้าว</b><br>
เพราะคนทั่วไปขาดการตัดสินใจที่ถูกต้องในการเลือกพันธุ์ข้าวที่เหมาะสมกับความต้องการและผลกำไรมากที่สุดผมจึงสร้างเว็บนี้ขึ้นมาเพื่อช่วยในการตัดสินใจ


                
                
                
                </td>
       </tr>
      </table>
      
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