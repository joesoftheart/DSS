<div class="col-md-9 jumbotron">
<div style="font-size:36px" align="center">ระบบคำนวนปุ๋ยและยา</div>
<br/>

<form class="form-horizontal">

<div class="form-group">
 <label  class="col-sm-5 control-label">ลักษณะ-วิธีการปลูก</label>
 <div class="col-sm-4" >
 <select class="form-control" id="activity">
    <option value="1">จ้างทุกอย่าง - นาเช่า</option>
    <option value="2">ทำเองทุกอย่าง - นาตนเอง</option>
  

    </select>
    </div>
    </div>
 

  <div class="form-group">
 <label  class="col-sm-5 control-label">จำนวนพื้นที่กี่ไร่</label>
 <div class="col-sm-4" >
 <input type="text" class="form-control" id="area" placeholder="จำนวนพื้นที่ที่ใช้ปลูกเป็น ไร่">
    </div>
  </div>
  
  <div class="form-group">
 <label  class="col-sm-5 control-label">จำนวนพื้นที่กีงาน</label>
 <div class="col-sm-4" >
 <input type="text" class="form-control" id="areaNgang" placeholder="จำนวนพื้นที่ที่ใช้ปลูกเป็น งาน">
    </div>
  </div>
  
     
  <div id="myModal" class="modal fade">
    <div class="modal-dialog modal-lg">
      <div class="modal-content modal-lg">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <center><h4 class="modal-title">ปริมาณการวิเคราห์ต้นทุนการทำนาข้าว</h4></center>
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
  <br />
  <br />
  <div align="right">
    <button type="button" id="calya" class="btn btn-primary">คำนวนปุ๋ยและยา</button>
  </div>
  <script>
       $("#calya").click(function(){
		   var areaNgang = $("#areaNgang").val();
		   var area = $("#area").val();
		   var activity = $("#activity").val();
		   $.post('calya.php',{'area':area,'activity':activity,'areaNgang':areaNgang},function(data){
			 $('#show').html(data);
			   });
			     $('#myModal').modal("show");
		   });
        </script>
</form>