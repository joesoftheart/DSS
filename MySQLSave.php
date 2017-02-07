<meta charset="utf-8">
<?php 
	$rice = $_POST['selectrice'];
	$area = $_POST['selectarea'];
	$link = mysql_connect("localhost","root","");
    $dbname = "db_rice";
	mysql_select_db($dbname);
	mysql_query("set NAMES utf8");
	$sql = mysql_query("UPDATE area_rice SET id_area='$area' WHERE id_rice='$rice';")or die(mysql_error());
	if($sql){
		echo "สำเร็จ";
		mysql_close($link);
		
		}else{
		echo "ไม่สำเร็จ";	
			
			}

echo "<a href=update.php>เพิ่มข้อมูลใหม่</a><br>";

?>