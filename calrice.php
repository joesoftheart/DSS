  <?php 
    $link = mysql_connect("localhost","root","");
    $dbname = "db_rice";
	mysql_select_db($dbname);
	mysql_query("set NAMES utf8"); ?>
	
<?php
$arearice = $_POST['arearice'];
$ricelight = $_POST['ricelight'];
$ricedisease = $_POST['ricedisease'];
$ricetype = $_POST['ricetype'];
$riceregion = $_POST['riceregion'];
$riceproduct = $_POST['riceproduct'];
$sql=mysql_query("SELECT * FROM rice ri
INNER JOIN area_rice ar ON ri.id_rice = ar.id_rice  
INNER JOIN area_r a ON a.id_area_r = ar.id_area
INNER JOIN class_rice_rice crr ON ri.id_rice = crr.id_rice
INNER JOIN class_rice cr ON cr.id_class_rice = crr.id_class_rice
INNER JOIN detail_rice dr ON dr.id_rice = ri.id_rice
INNER JOIN light_rice lr ON lr.id_rice = ri.id_rice
INNER JOIN light l ON lr.id_light = l.id_light
INNER JOIN disease_rice di ON di.id_rice = ri.id_rice
INNER JOIN disease d ON d.id_disease = di.id_disease 
INNER JOIN region_rice rr ON rr.id_rice = ri.id_rice
INNER JOIN region r ON r.id_region = rr.id_region
INNER JOIN type_rice_rice trr ON trr.id_rice = ri.id_rice
INNER JOIN type_rice tr ON tr.id_type = trr.id_type  

WHERE lr.id_light = '$ricelight'  
AND tr.id_type = '$ricetype' 
AND r.id_region = '$riceregion' 
AND a.id_area_r = '$arearice' 
AND dr.product >'$riceproduct' 
AND di.id_disease = '$ricedisease' ORDER BY dr.product DESC ")or die(mysql_error());
?>


<?php
if($row = mysql_fetch_array($sql)){
?>
<table class="table"   >
<tr>
<td width="15%"></td>
<td align="center"><img src="rice/<?php echo $row['picture_rice'];?>.jpg "/></td>
</tr>
<tr>
<td width="15%"><b>ชื่อพันธุ์</b></td>
<td><?php echo $row['name_rice'] ?></td>
</tr>
<tr>
<td><b>ชนิด</b></td>
<td><?php echo $row['name_type'] ?></td>
</tr>
<tr>
<td><b>คู่ผสม</b></td>
<td><?php echo $row['mixed_rice'] ?></td>
</tr>
<tr>
<td><b>ประวัติพันธุ์</b></td>
<td><?php echo $row['history'] ?></td>
</tr>
<tr>
<td><b>การรับรองพันธุ์</b></td>
<td><?php echo $row['certificate'] ?></td>
</tr>
<tr>
<td><b>ลักษณะประจำพันธุ์</b></td>
<td><?php echo $row['quality'] ?></td>
</tr>
<tr>
<td><b>ผลผลิต</b></td>
<td><?php echo $row['product'] ?></td>
</tr>
<tr>
<td><b>ลักษณะเด่น</b></td>
<td><?php echo $row['qualitygood'] ?></td>
</tr>
<tr>
<td><b>ข้อควรระวัง</b></td>
<td><?php echo $row['warning'] ?></td>
</tr>
<tr>
<td><b>พื้นที่แนะนำ</b></td>
<td><?php echo $row['name_region'] ?></td>
</tr>
</table>
<?php
}else { ?>
	<table class="table"   >
<tr>
<td align="center">ไม่มีผลลัพท์ที่ท่านต้องการค้นหา</td>
</tr>
<tr>
	
	
	<?php } ?>
 <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
          <a href="gis.php?lati=<?php echo $row['latitude'] ?> && logti=<?php echo $row['longitude'] ?>" >
          <button type="button" class="btn btn-primary" >Show in Gis</button></a>
        </div>


