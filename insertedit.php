<?
header('Content-Type: text/html; charset=utf-8');
if($send == null){
?> <form method="post" action="<? echo $PHP_SELF ?>">

  <p>แบบฟอร์มการเพิ่มข้อมูลตารางข้าว</p>
  
 เลือกพันธุ์ข้าว<select name="selectrice" >
  <?php 
    $link = mysql_connect("localhost","root","root");
    $dbname = "db_rice";
	mysql_select_db($dbname);
	mysql_query("set NAMES utf8");
	
	$sql = mysql_query("SELECT*FROM rice")or die(mysql_error());
   
	 while ($row = mysql_fetch_array($sql)) { ?> 
     
    <option value="<?=$row['id_rice'] ?>"><?=$row['name_rice'] ?></option>
	 <?php } ?>
     
  </select><p>
 
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
<input type="submit" name="send" value="Submit">
<input type="reset" name="cancle" value="Reset">
</form>
<? } else{ 

	$link = mysql_connect("localhost","root","root");
    $dbname = "db_rice";
	mysql_select_db($dbname);
	mysql_query("set NAMES utf8");

	$sql = mysql_query("INSERT INTO detail_rice (id_rice,id_detail,mixed_rice,history,certificate,quality,period_time,product,qualitygood,warning) VALUES('$selectrice','$selectrice','$txt','$txt2','$txt3','$txt4','$time','$product','$txt5','$txt6')")or die(mysql_error());
	
	
	
	if($sql){
		echo "สำเร็จ";
		mysql_close($link);
		
		}else{
		echo "ไม่สำเร็จ";	
			
			}

echo "<a href=insertedit.php>เพิ่มข้อมูลใหม่</a><br>";

 } ?>

<form id="form1" name="form1" method="post" action="">
  <label for="select"></label>
</form>
