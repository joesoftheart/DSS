<?php
header('Content-Type: text/html; charset=utf-8');
if($send == null){
?> <form method="post" action="<? echo $PHP_SELF ?>">

  <p>แบบฟอร์มการเพิ่มข้อมูลตารางข้าว</p>
  
 เลือกพันธุ์ข้าว<select name="selectrice" >
  <?php 
    $link = mysql_connect("localhost","root","");
    $dbname = "db_rice";
	mysql_select_db($dbname);
	mysql_query("set NAMES utf8");
	
	$sql = mysql_query("SELECT*FROM rice")or die(mysql_error());
   
	 while ($row = mysql_fetch_array($sql)) { ?> 
     
    <option value="<?=$row['id_rice'] ?>"><?=$row['name_rice'] ?></option>
	 <?php } ?>
     
  </select><p>
  เลือกลักษณะพื้นที่<select name="selectarea" >
  <?php 
    $link = mysql_connect("localhost","root","");
    $dbname = "db_rice";
	mysql_select_db($dbname);
	mysql_query("set NAMES utf8");
	
	$sql = mysql_query("SELECT*FROM area_r")or die(mysql_error());
   
	 while ($row = mysql_fetch_array($sql)) { ?> 
     
     <option value="<?=$row['id_area_r'] ?>"><?=$row['name_area_r'] ?></option>
	 <?php } ?>
     
  </select><p>
  เลือกกลุ่มของข้าว<select name="selectclass" >
  <?php 
    $link = mysql_connect("localhost","root","");
    $dbname = "db_rice";
	mysql_select_db($dbname);
	mysql_query("set NAMES utf8");
	
	$sql = mysql_query("SELECT*FROM class_rice")or die(mysql_error());
   
	 while ($row = mysql_fetch_array($sql)) { ?> 
     
     <option value="<?=$row['id_class_rice'] ?>"><?=$row['name_class_rice'] ?></option>
	 <?php } ?>
  </select>  
  <p>

    พันธุ์ผสมข้าว<textarea name="txt" id="txt" cols="45" rows="5"></textarea>  
  <p>
    ประวัติข้าว<textarea name="txt2" id="txt2" cols="45" rows="5"></textarea>
  <p>
    ใบรับรองข้าว<textarea name="txt3" id="txt3" cols="45" rows="5"></textarea>
  <p>
    ลักษณะประจำพันธุ์<textarea name="txt4" id="txt4" cols="45" rows="5"></textarea>
  <p>
  ระยะเวลาเก็บเกี่ยว<input type="text" name="time" ><p>
  ผลผลิตข้าว<input type="text" name="product"><p>
  <p>
    ลักษณะ	เด่น<textarea name="txt5" id="txt5" cols="45" rows="5"></textarea>
  <p>
  ข้อควรระวัง<textarea name="txt6" id="txt6" cols="45" rows="5"></textarea>
  <p>
    
    เลือกภูมิภาค
    <select name="selectregion" >
      <?php 
    $link = mysql_connect("localhost","root","");
    $dbname = "db_rice";
	mysql_select_db($dbname);
	mysql_query("set NAMES utf8");
	
	$sql = mysql_query("SELECT*FROM region")or die(mysql_error());
   
	 while ($row = mysql_fetch_array($sql)) { ?> 
      
      <option value="<?=$row['id_region'] ?>"><?=$row['name_region'] ?></option>
      <?php } ?>
    </select>    
  <p>
  
   เลือกความไวต่อแสง<select name="selectlight" >
     <option value="1">ไวต่อแสง</option>
     <option value="2">ไม่ไวต่อแสง</option>
  </select>  <p>
  
  เลือกชนิดข้าว<select name="selecttype" >
     <option value="1">ข้าวเจ้า</option>
     <option value="2">ข้าวเหนียว</option>
     <option value="3">ข้าวบาเลย์</option>
  </select>  <p>
 
<input type="submit" name="send" value="Submit">
<input type="reset" name="cancle" value="Reset">
</form>
<?php } else{ 

	$link = mysql_connect("localhost","root","");
    $dbname = "db_rice";
	mysql_select_db($dbname);
	mysql_query("set NAMES utf8");
	
	$sql = mysql_query("INSERT INTO area_rice (id_rice,id_area) VALUES('$selectrice','$selectarea')")or die(mysql_error());
	
	$sql = mysql_query("INSERT INTO class_rice_rice (id_rice,id_class_rice) VALUES('$selectrice','$selectclass')")or die(mysql_error());
	
	$sql = mysql_query("INSERT INTO detail_rice (id_rice,id_detail,mixed_rice,history,certificate,quality,period_time,product,qualitygood,warning) VALUES('$selectrice','$selectrice','$txt','$txt2','$txt3','$txt4','$time','$product','$txt5','$txt6')")or die(mysql_error());
	
	$sql = mysql_query("INSERT INTO region_rice (id_rice,id_region) VALUES('$selectrice','$selectregion')")or die(mysql_error());
	
	$sql = mysql_query("INSERT INTO type_rice_rice (id_rice,id_type) VALUES('$selectrice','$selecttype')")or die(mysql_error());
	
	$sql = mysql_query("INSERT INTO light_rice (id_rice,id_light) VALUES('$selectrice','$selectlight')")or die(mysql_error());
	
	if($sql){
		echo "สำเร็จ";
		mysql_close($link);
		
		}else{
		echo "ไม่สำเร็จ";	
			
			}

echo "<a href=insert.php>เพิ่มข้อมูลใหม่</a><br>";

 } ?>

<form id="form1" name="form1" method="post" action="">
  <label for="select"></label>
</form>
