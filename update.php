<meta charset="utf-8">
<form method="post" action="MySQLSave.php">
  <p>แบบฟอร์มการอับเดทพื้นที่</p>
 เลือกพันธุ์ข้าว<select name="selectrice" >
  <?php 
    $link = mysql_connect("localhost","root","");
    $dbname = "db_rice";
	mysql_select_db($dbname);
	mysql_query("set NAMES utf8");
	$sql = mysql_query("SELECT * FROM rice ri
INNER JOIN area_rice ar ON ri.id_rice = ar.id_rice")or die(mysql_error());
	 while ($row = mysql_fetch_array($sql)) { ?> 
    <option value="<?=$row['id_rice'] ?>"><?=$row['name_rice'] ?></option>
	 <?php } ?>
  </select><p>
  
   เลือกพันธุ์ข้าว<select name="selectarea" >
  <?php 
    $link = mysql_connect("localhost","root","");
    $dbname = "db_rice";
	mysql_select_db($dbname);
	mysql_query("set NAMES utf8");
	
	$sql = mysql_query("SELECT * FROM area_r")or die(mysql_error());
	 while ($row = mysql_fetch_array($sql)) { ?> 
     
    <option value="<?=$row['id_area_r'] ?>"><?=$row['name_area_r'] ?></option>
	 <?php } ?>
     
  </select><p>
<input type="submit" name="send" value="Submit">
<input type="reset" name="cancle" value="Reset">
</form>

