<!DOCTYPE html>
<html lang="en">
  <head>
  <style>
body {
	background: url(../img/bg_rice.png) no-repeat center center fixed;
	background-size: cover;
}
</style>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>ระบบการตัดสินใจ</title>
  <!-- Bootstrap core CSS -->
  <link href="../bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="navbar.css" rel="stylesheet">

  <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
  <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
  <script src="../bootstrap-3.3.4-dist/js/ie-emulation-modes-warning.js"></script>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <style>
.jum {
	background-image: url(../img/seed.png);
	background-size: cover;
}
</style>
<style>
    .jum2 {
background-color:#F5FBEF}

  </style>
  </head>

  <body background="img/ข้าว.jpg" style="background-repeat: no-repeat;
    background-position: 100% 100%;
    background-size:100%;
    ">
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
             <a class="navbar-brand" href="../index.php">หน้าแรก</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li ><a href="../index.php?id=1">ระบบเลือกพันธุ์ข้าว</a></li>
              <li ><a href="../index.php?id=2">ระบบเลือกพื้นที่ปลูกข้าว</a></li>
              <li><a href="../index.php?id=3">ระบบคำนวนปุ๋ยและยา</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">E-Learning<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  
                  <li><a href="../questionarea/question-area.php">โรคข้าว</a></li>
                  <li><a href="#">กฏหมายเกี่ยวข้องกับข้าว</a></li>
                </ul>
              </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="../gis.php">ระบบ GIS<span class="sr-only">(current)</span></a></li>
              <li><a href="../call.php">ติดต่อ</a></li>
              <li><a href="#">Fixed top</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>

      <!-- Main component for a primary marketing message or call to action -->
      

<div class="jumbotron jum">
    <h1>ระบบตัดสินใจ</h1>
    ในการจัดการด้านมลพิษจากฟร์ามสุกร
  </div>
<div class="jumbotron jum2">
    <div class="row">
    <div class="col-xs-12">
    <h3>คำถามเพื่อฝึกการเรียนรู้เกี่ยวกับโรคข้าว</h3>
        <form name="form1" method="post" action="question-area2.php">
<?php
$host="localhost";
$username="root";
$password="";
$db="db_rice";
$tb="question";


mysql_connect( $host,$username,$password) or die ("ติดต่อกับฐานข้อมูล Mysql ไม่ได้ ");
mysql_select_db($db) or die("เลือกฐานข้อมูลไม่ได้");
mysql_query("SET NAMES UTF8");
$sql="Select * From $tb order by rand() ";
$db_query=mysql_query($sql);
$i=0;
while($result=mysql_fetch_array($db_query))
{
$i++;
?>
<center><table width="100%" border="0" align="center">
<tr>
<td width="50%"> <div>
<input name="id[<?php echo $i;?>]" type="hidden" value="<?php echo $result["id"];?>"><b> <?php echo  $i. '.) ' ?>
<?php echo $result["question"];?></b>
</div></td>
</tr>

<tr><td width="50%"> <input name="c<?php echo $i;?>" type="radio" value="1" >
<?php echo $result["c1"];?>
</td>
<td width="50%"> <input type="radio" name="c<?php echo $i;?>" value="2">
<?php echo $result["c2"];?>
</td>
</tr>

<tr>
<td width="50%"> <input type="radio" name="c<?php echo $i;?>" value="3">
<?php echo $result["c3"];?>
</td>
<td width="50%"> <input type="radio" name="c<?php echo $i;?>" value="4">
<?php echo $result["c4"];?>
<input name="answer[<?php echo $i;?>]" type="hidden" value="<?php echo $result["answer"];?>">
</td></tr>
</table></center><br><br>
<?php
}
mysql_close();
?>
<div align="center"><br>
<input type="submit" name="Submit" value="ตรวจคะแนน">
</div>
</form>

      </div>
  </div>
  </div>
<!-- /container --> 
<?php include "../footer.php" ?> 
<!-- Bootstrap core JavaScript
    ================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<script src="../bootstrap-3.3.4-dist/js/bootstrap.min.js"></script> 
<script src="../bootstrap-3.3.4-dist/css/offcanvas.css"></script> 
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug --> 
<script src="../bootstrap-3.3.4-dist/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>