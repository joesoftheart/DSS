<?php 
    $link = mysql_connect("localhost","root","");
    $dbname = "db_rice";
	mysql_select_db($dbname);
	mysql_query("set NAMES utf8"); ?>
	<?php 
	$price = $_POST['price'];
	$shonrapatan = $_POST['shonrapatan'];
	$disease = $_POST['disease'];
	$stat = $_POST['stat'];
	$eart = $_POST['eart'];
	$riceearth = $_POST['riceearth'];
	$num = 6;
	
	
	$sum = $price+$shonrapatan+$disease+$stat+$eart+$riceearth;
	$point = $sum/$num ;
	$result = round($point,2);
	


	
	?>
    <table class="table" >
    <tr>
    <td ></td>
    <td align="center" style="font-size:20px; color:#696;">ค่าเฉลี่ยการประเมินพื้นที่ในการปลูกข้าวคือ <?php echo $result ?></td>
    </tr>
    <tr>
    <td></td>
     <?php if($point <= 1.5){ ?>
		<td style="font-size:22px; color:#C00;" align="center">ไม่มีความเหมาะสมในการปลูกข้าว</td>
		<?php } else if($point <=2){ ?>
			<td style="font-size:22px; color:#3CF;" align="center">พอใช้สำหรับการปลูกข้าว</td>
			<?php } else { ?>
				<td style="font-size:22px; color:#3CF;" align="center">มีความเหมาะสมในการปลูกข้าว</td>
				<?php } ?>
    </tr>
    <tr>
    <td></td><?php if ($price == 1) { ?>
    <td style="color:#C30">ท่านควรพิจจารณาเรื่องต่องไปนี้ในการปลูกข้าว</td>
    <?php } else {?>
    <td>ท่านควรพิจจารณาเรื่องต่องไปนี้ในการปลูกข้าว</td>
    <?php } ?>
    </tr>
    <tr>
    <td></td><?php if ($shonrapatan == 1) { ?>
    <td style="color:#C30">ท่านควรจัดหาระบบชลประทานให้กับพื้นที่ในการปลูกข้าวของท่าน</td>
    <?php } else {?>
    <td>ท่านควรจัดหาระบบชลประทานให้กับพื้นที่ในการปลูกข้าวของท่าน</td>
    <?php } ?>
    </tr>
    <tr>
    <td></td><?php if ($disease == 1) { ?>
    <td style="color:#C30">ท่านควรระมัดระวังเกี่ยวกับโรคที่อาจเกิดขึ้นกับข้าวของท่าน</td>
    <?php } else {?>
    <td>ท่านควรระมัดระวังเกี่ยวกับโรคที่อาจเกิดขึ้นกับข้าวของท่าน</td>
    <?php } ?>
    </tr>
    <tr>
    <td></td><?php if ($stat == 1) { ?>
    <td style="color:#C30">ท่านควรจัดกามาตราการในการรับมือกับภัยธรรมชาติที่จะเกิดขึ้น</td>
    <?php } else {?>
    <td>ท่านควรจัดกามาตราการในการรับมือกับภัยธรรมชาติที่จะเกิดขึ้น</td>
    <?php } ?>
    </tr>
    <tr>
    <td></td><?php if ($eart == 1) { ?>
    <td style="color:#C30">ท่านควรปรับปรุงคุณภาพดินในพื้นที่ที่ท่านจะทำการปลูกข้าว</td>
    <?php } else {?>
    <td>ท่านควรปรับปรุงคุณภาพดินในพื้นที่ที่ท่านจะทำการปลูกข้าว</td>
    <?php } ?>
    </tr>
    <tr>
    <td></td><?php if ($riceearth == 1) { ?>
    <td style="color:#C30">ท่านควรหาแนวทางในการแก้ไขปัญหาดินที่อาจจะทำให้ข้าวไม่เจริญเติบโต</td>
    <?php } else {?>
    <td>ท่านควรหาแนวทางในการแก้ไขปัญหาดินที่อาจจะทำให้ข้าวไม่เจริญเติบโต</td>
    <?php } ?>
    </tr>
    
    <tr>
    <td></td>
    <td style="color:#C30" >*พิจารณาเฉพาะคำเตือนที่มีอักษรสีแดงเท่านั้น</td>
    </tr>
   
    
    
    </table>
