<?php 
    $link = mysql_connect("localhost","root","");
    $dbname = "db_rice";
	mysql_select_db($dbname);
	mysql_query("set NAMES utf8"); ?>
	<?php 
	$areaRai = $_POST['area'];
	$areaNgang = $_POST['areaNgang'];
	$areaNgang = $areaNgang/4;
	$area = $areaNgang+$areaRai;
	$activity = $_POST['activity'];
	
	$money_ti = 540;
	$money_pruk = 690;
	$money_kumya = 70;
	$money_kaya = 200;
	$money_whanpui = 150;
	$money_whankaw = 50;
	$money_shidya = 200;
	$money_kamang = 150;
	$money_kapui = 1950;
	$money_subnam = 200;
	$money_car = 700;
	$money_cho = 2000;
	
	
	$moneyang_ti = 200;
	$moneyang_pruk = 450;
	$moneyang_kumya = 200;
	$moneyang_kaya = 0;
	$moneyang_whanpui = 0;
	$moneyang_whankaw = 0;
	$moneyang_shidya = 150;
	$moneyang_kamang = 1950;
	$moneyang_kapui = 1950;
	$moneyang_subnam = 200;
	$moneyang_car = 700;
	$moneyang_cho = 0;
	
	$moneytotel = $money_ti*$area+$money_pruk*$area+ $money_kumya*$area+ $money_kaya*$area+$money_whanpui*$area+$money_whankaw*$area+$money_shidya*$area+$money_kamang*$area+$money_kapui*$area+$money_subnam*$area+$money_car*$area+$money_cho*$area;
	
	$moneytotelang = $moneyang_ti*$area+$moneyang_pruk*$area+ $moneyang_kumya*$area+ $moneyang_kaya*$area+$moneyang_whanpui*$area+$moneyang_whankaw*$area+$moneyang_shidya*$area+$moneyang_kamang*$area+$moneyang_kapui*$area+$moneyang_subnam*$area+$moneyang_car*$area+$moneyang_cho*$area;
	?>
	
	<?php  if ($activity == 1) { ?>
	
	
    <table class="table">
    <tr>
    <td style="font-size:18px; color:#0CF;">รายการค่าใช้จ่าย</td>
    <td></td>
    </tr>
    <tr>
    <td >1.ค่าไถ  ทำเทือก</td>
    <td align="center" style="font-size:18px; color:#696;">ค่าใช้จ่ายในการซื้อปุ๋ย <?php echo $money_ti*$area ?> บาท</td>
    </tr>
    <tr>
    <td >2.ค่าพันธ์ข้าวปลูก 25-30 ก.ก.</td>
    <td align="center" style="font-size:18px; color:#696;">ค่าใช้จ่ายในการซื้อยา <?php echo $money_pruk*$area ?> บาท</td>
    </tr>
    <tr>
    <td >3.ค่ายาคุมหญ้า 3-4 ไร่ต่อ 1 ขวด</td>
    <td align="center" style="font-size:18px; color:#696;">ค่าใช้จ่ายในการซื้อยา <?php echo $money_kumya*$area ?> บาท</td>
    </tr>
    <tr>
    <td >4.ค่ายาฆ่าหญ้า</td>
    <td align="center" style="font-size:18px; color:#696;">ค่าใช้จ่ายในการซื้อยา <?php echo $money_kaya*$area ?> บาท</td>
    </tr>
    <tr>
    <td >5.ค่าหว่านปุ๋ย 2-3 ครั้ง</td>
    <td align="center" style="font-size:18px; color:#696;">ค่าใช้จ่ายในการซื้อยา <?php echo $money_whanpui*$area ?> บาท</td>
    </tr>
    <tr>
    <td >6.ค่าหว่านข้าวต่อไร้</td>
    <td align="center" style="font-size:18px; color:#696;">ค่าใช้จ่ายในการซื้อยา <?php echo $money_whankaw*$area ?> บาท</td>
    </tr>
    <tr>
    <td >7.ค่าฉีดยา 1-4 ครั้ง</td>
    <td align="center" style="font-size:18px; color:#696;">ค่าใช้จ่ายในการซื้อยา <?php echo $money_shidya*$area ?> บาท</td>
    </tr>
    <tr>
    <td >8.ค่ายาฆ่าแมลง-เชื้อรา-ฮอร์โมน</td>
    <td align="center" style="font-size:18px; color:#696;">ค่าใช้จ่ายในการซื้อยา <?php echo $money_kamang*$area ?> บาท</td>
    </tr>
    <tr>
    <td >9.ค่าปุ๋ย 50-75/ ก.ก.</td>
    <td align="center" style="font-size:18px; color:#696;">ค่าใช้จ่ายในการซื้อยา <?php echo $money_kapui*$area ?> บาท</td>
    </tr>
    <tr>
    <td >10.ค่าน้ำมันสูบน้ำ ขอดน้ำดูแล</td>
    <td align="center" style="font-size:18px; color:#696;">ค่าใช้จ่ายในการซื้อยา <?php echo $money_subnam*$area ?> บาท</td>
    </tr>
    <tr>
    <td >11.ค่ารถเกี่ยวขาว</td>
    <td align="center" style="font-size:18px; color:#696;">ค่าใช้จ่ายในการซื้อยา <?php echo $money_car*$area ?> บาท</td>
    </tr>
    <tr>
    <td >12.ค่าเช่าที่นา</td>
    <td align="center" style="font-size:18px; color:#696;">ค่าใช้จ่ายในการซื้อยา <?php echo $money_cho*$area ?> บาท</td>
    </tr>
    <tr>
    <td style="font-size:18px; color:#0CF;">รวมต้นทุน</td>
    <td align="center" style="font-size:18px; color:#0CF;">ค่าใช้จ่ายทั้งหมดโดยประมาณ<?php echo $moneytotel ?> บาท</td>
    </tr>
    </table>
<?php } else {  ?> 


	  <table class="table">
       <tr>
    <td style="font-size:18px; color:#0CF;">รายการค่าใช้จ่าย</td>
    <td></td>
    </tr>
    <tr>
    <td >1.ค่าไถ  ทำเทือก</td>
    <td align="center" style="font-size:18px; color:#696;">ค่าใช้จ่ายในการซื้อปุ๋ย <?php echo $moneyang_ti*$area ?> บาท</td>
    </tr>
    <tr>
    <td >2.ค่าพันธ์ข้าวปลูก 25-30 ก.ก.</td>
    <td align="center" style="font-size:18px; color:#696;">ค่าใช้จ่ายในการซื้อยา <?php echo $moneyang_pruk*$area ?> บาท</td>
    </tr>
    <tr>
    <td >3.ค่ายาคุมหญ้า 3-4 ไร่ต่อ 1 ขวด</td>
    <td align="center" style="font-size:18px; color:#696;">ค่าใช้จ่ายในการซื้อยา <?php echo $moneyang_kumya*$area ?> บาท</td>
    </tr>
    <tr>
    <td >4.ค่ายาฆ่าหญ้า</td>
    <td align="center" style="font-size:18px; color:#696;">ค่าใช้จ่ายในการซื้อยา <?php echo $moneyang_kaya*$area ?> บาท</td>
    </tr>
    <tr>
    <td >5.ค่าหว่านปุ๋ย 2-3 ครั้ง</td>
    <td align="center" style="font-size:18px; color:#696;">ค่าใช้จ่ายในการซื้อยา <?php echo $moneyang_whanpui*$area ?> บาท</td>
    </tr>
    <tr>
    <td >6.ค่าหว่านข้าวต่อไร้</td>
    <td align="center" style="font-size:18px; color:#696;">ค่าใช้จ่ายในการซื้อยา <?php echo $moneyang_whankaw*$area ?> บาท</td>
    </tr>
    <tr>
    <td >7.ค่าฉีดยา 1-4 ครั้ง</td>
    <td align="center" style="font-size:18px; color:#696;">ค่าใช้จ่ายในการซื้อยา <?php echo $moneyang_shidya*$area ?> บาท</td>
    </tr>
    <tr>
    <td >8.ค่ายาฆ่าแมลง-เชื้อรา-ฮอร์โมน</td>
    <td align="center" style="font-size:18px; color:#696;">ค่าใช้จ่ายในการซื้อยา <?php echo $moneyang_kamang*$area ?> บาท</td>
    </tr>
    <tr>
    <td >9.ค่าปุ๋ย 50-75/ ก.ก.</td>
    <td align="center" style="font-size:18px; color:#696;">ค่าใช้จ่ายในการซื้อยา <?php echo $moneyang_kapui*$area ?> บาท</td>
    </tr>
    <tr>
    <td >10.ค่าน้ำมันสูบน้ำ ขอดน้ำดูแล</td>
    <td align="center" style="font-size:18px; color:#696;">ค่าใช้จ่ายในการซื้อยา <?php echo $moneyang_subnam*$area ?> บาท</td>
    </tr>
    <tr>
    <td >11.ค่ารถเกี่ยวขาว</td>
    <td align="center" style="font-size:18px; color:#696;">ค่าใช้จ่ายในการซื้อยา <?php echo $moneyang_car*$area ?> บาท</td>
    </tr>
    <tr>
    <td >12.ค่าเช่าที่นา</td>
    <td align="center" style="font-size:18px; color:#696;">ค่าใช้จ่ายในการซื้อยา <?php echo $moneyang_cho*$area ?> บาท</td>
    </tr>
    <tr>
    <td style="font-size:18px; color:#0CF;" >รวมต้นทุน</td>
    <td align="center" style="font-size:18px; color:#0CF;">ค่าใช้จ่ายทั้งหมดโดยประมาณ <?php echo $moneytotelang ?> บาท</td>
    </tr>
    </table>


<?php } ?>