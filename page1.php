<div class="col-md-9 jumbotron ">
<div style="font-size:36px" align="center">ระบบเลือกพื้นที่ปลูกข้าว</div>
       <form class="form-horizontal">
 <div class="form-group">
 <label  class="col-sm-5 control-label">ความพึงพอใจในราคาที่ดิน</label>
 <div class="col-sm-4" >
 <select class="form-control" id="price">
    <option value="3">พอใจที่ราคาที่ดินมาก</option>
    <option value="2">พอใจที่ราคาที่ดินปานกลาง</option>
    <option value="1">พอใจที่ราคาที่ดินน้อย</option>
    </select>
    </div>
  </div>
  <div class="form-group">
 <label  class="col-sm-5 control-label">ระบบชลประทาน</label>
 <div class="col-sm-4" >
 <select class="form-control" id="shonrapatan">
    <option value="3">มีระบบชลประทาน</option>
    <option value="2">ต้องรอระบบชลประทาน</option>
    <option value="1">ไม่มีระบบชลประทานข้างเคียง</option>
    </select>
    </div>
  </div>
  <div class="form-group">
 <label  class="col-sm-5 control-label">โรคข้าวที่เกิดขึ้น</label>
 <div class="col-sm-4"  >
 <select class="form-control" id="disease">
    <option value="3">ไม่เคยมีโรคข้าวที่เกิดขึ้น</option>
    <option value="2">มีโรคข้าวบ้างนิดหน่อย</option>
    <option value="1">มีโรคข้าวเยอะมาก</option>
    </select>
    </div>
  </div>
  <div class="form-group">
 <label  class="col-sm-5 control-label">สถิติการเกิดภัยธรรมชาติภายใน 3 ปี</label>
 <div class="col-sm-4" >
 <select class="form-control" id="stat">
    <option value="3">น้อยกว่า 2 ครั้ง</option>
    <option value="2">มากกว่า 2 ครั้งแต่ไม่เกิน 5 ครั้ง</option>
    <option value="1">มากกว่า 5 ครั้ง</option>
    </select>
    </div>
  </div>
  <div class="form-group">
 <label  class="col-sm-5 control-label">ความสมบูรณ์ของดิน</label>
 <div class="col-sm-4" >
 <select class="form-control" id="eart">
    <option value="3">มาก</option>
    <option value="2">ปานกลาง</option>
    <option value="1">ต่ำ</option>
    </select>
    </div>
  </div>
  <div class="form-group">
 <label  class="col-sm-5 control-label">ความเหมาะสมของที่ดินกับสายพันธุ์ข้าว</label>
 <div class="col-sm-4" >
 <select class="form-control" id="riceearth">
    <option value="3">มีความเหมาะสมมาก</option>
    <option value="2">มีความเหมาะสมปานกลาง</option>
    <option value="1">มีความเหมาะสมน้อย</option>
    </select>
    </div>
  </div>
   <div align="right">
    <button type="button" id="cal" class="btn btn-primary">คำนวนพื้นที่ที่เหมาะสม</button>
  </div>
    </div>
  </div>
   <div id="myModal" class="modal fade">
    <div class="modal-dialog ">
      <div class="modal-content ">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" align="center" style="font-size:22px" >ผลการประเมิณพื้นที่ในการปลูกข้าว</h4>
        </div>
        <div id="show" class="modal-body"> 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div>
      </div>
      <!-- /.modal-content --> 
    </div>
    <!-- /.modal-dialog --> 
  </div>
  <!-- /.modal -->
  <script>
       $("#cal").click(function(){
		   var price = $("#price").val();
		   var shonrapatan = $("#shonrapatan").val();
		   var disease = $("#disease").val();
		   var stat = $("#stat").val();
		   var eart = $("#eart").val();
		   var riceearth = $("#riceearth").val();
		   $.post('calarea.php',{'price':price,'shonrapatan':shonrapatan, 'disease':disease,'stat':stat,'eart':eart,'riceearth':riceearth},function(data){
			 $('#show').html(data);
			   });
			     $('#myModal').modal("show");
		   });
        </script>
</form>