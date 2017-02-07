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
     </select>
      เลือกโรคข้าว<select name="selectdisease" >
     <?php 
    $link = mysql_connect("localhost","root","root");
    $dbname = "db_rice";
	mysql_select_db($dbname);
	mysql_query("set NAMES utf8");
	
	$sql = mysql_query("SELECT*FROM disease")or die(mysql_error());
   
	 while ($row = mysql_fetch_array($sql)) { ?> 
     
    <option value="<?=$row['id_disease'] ?>"><?=$row['name_disease'] ?></option>
    
	 <?php } ?>
     </select>
     
<input type="submit" name="send" value="Submit">
<input type="reset" name="cancle" value="Reset">
</form>
<? } else{ 

	$link = mysql_connect("localhost","root","root");
    $dbname = "db_rice";
	mysql_select_db($dbname);
	mysql_query("set NAMES utf8");
	
	$sql = mysql_query("INSERT INTO disease_rice (id_rice,id_disease) VALUES('$selectrice','$selectdisease')")or die(mysql_error());
	
	
	if($sql){
		echo "สำเร็จ";
		mysql_close($link);
		
		}else{
		echo "ไม่สำเร็จ";	
			
			}

echo "<a href=insertdisease.php>เพิ่มข้อมูลใหม่</a><br>";

 } ?>

<form id="form1" name="form1" method="post" action="">
  <label for="select"></label>
</form>
