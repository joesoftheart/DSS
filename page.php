<div class="col-md-9 jumbotron">
<div style="font-size:36px" align="center">ระบบเลือกพันธ์ข้าว</div>
<form method="post" action="<?php echo $PHP_SELF ?>">
  <div class="form-group">
    <label for="light">แบ่งข้าวตามฤดูกาล</label>
    <select id="ricelight" class="form-control">
      <?php 
    $link = mysql_connect("localhost","root","");
    $dbname = "db_rice";
	mysql_select_db($dbname);
	mysql_query("set NAMES utf8");
	
	$sql = mysql_query("SELECT*FROM light")or die(mysql_error());
   
	 while ($row = mysql_fetch_array($sql)) { ?> 
     
    <option value="<?php echo $row['id_light'] ?>"><?php echo $row['name_light'] ?></option>
	 <?php } ?>
     
  </select><p>
  </div>
  <div class="form-group">
    <label for="type" >ข้าวที่ต้องการปลูก</label>
    <select class="form-control" id="ricetype">
       <?php 
	$sql = mysql_query("SELECT*FROM type_rice")or die(mysql_error());
   
	 while ($row = mysql_fetch_array($sql)) { ?> 
     
    <option value="<?php echo $row['id_type'] ?>"><?php echo $row['name_type'] ?></option>
	 <?php } ?>
    </select>
    <label for="region">ภูมิภาคที่จะใช้ปลูก</label>
    <select class="form-control" id="riceregion">
       <?php 
	$sql = mysql_query("SELECT*FROM region")or die(mysql_error());
   
	 while ($row = mysql_fetch_array($sql)) { ?> 
     
    <option value="<?php echo $row['id_region'] ?>"><?php echo $row['name_region'] ?></option>
	 <?php } ?>
    </select>
  </div>
  <div class="form-group " >
    <div class="row">
      <div class="col-xs-4">
        <label for="product">กรอกปริมาณผลผลิต</label>
    <input id="product" type="text" class="form-control" placeholder="ปริมาณผลผลิต ก.ก./ไร่">
      </div>
      
      <div class="col-xs-4">
        <label for="arearice">ลักษณะพื้นที่</label>
    <select class="form-control" id="arearice">
       <?php 
	$sql = mysql_query("SELECT*FROM area_r")or die(mysql_error());
   
	 while ($row = mysql_fetch_array($sql)) { ?> 
     
    <option value="<?php echo $row['id_area_r'] ?>"><?php echo $row['name_area_r'] ?></option>
	 <?php } ?>
    </select>
      </div>
      
    </div>
  </div>
  <div class="form-group">
    <label for="disease">จำเป็นต้องต้านทานโรคชนิดไหน</label>
    <select class="form-control" id="ricedisease">
      <?php 
	$sql = mysql_query("SELECT*FROM disease")or die(mysql_error());
	 while ($row = mysql_fetch_array($sql)) { ?> 
    <option value="<?php echo $row['id_disease'] ?>"><?php echo $row['name_disease'] ?></option>
	 <?php } ?>
    </select>
  </div>
  <div id="myModal" class="modal fade">
    <div class="modal-dialog modal-lg">
      <div class="modal-content modal-lg">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">พันธุ์ข้าวที่เหมาะกับการปลูกในพื้นที่ของท่าน</h4>
        </div>
        <div id="show" class="modal-body"> 
        </div>
        
      </div>
      <!-- /.modal-content --> 
    </div>
    <!-- /.modal-dialog --> 
  </div>
  <!-- /.modal -->
  
  <div align="right">
    <button type="button" id="cal" class="btn btn-primary">คำนวนพันธ์ข้าวที่เหมาะสม</button>
  </div>
  <script>
       $("#cal").click(function(){
		   var arearice = $("#arearice").val();
		   var ricelight = $("#ricelight").val();
		   var ricetype = $("#ricetype").val();
		   var ricedisease = $("#ricedisease").val();
		   var riceregion = $("#riceregion").val();
		   var riceproduct = $("#product").val();
		   $.post('calrice.php',{'ricelight':ricelight,'ricetype':ricetype, 'ricedisease':ricedisease,'riceregion':riceregion,'riceproduct':riceproduct,'arearice':arearice},function(data){
			 $('#show').html(data);
			   });
			     $('#myModal').modal("show");
		   });
        </script>
</form>
