<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
        <link rel="stylesheet" href="bootstrap-3.3.4-dist/css/bootstrap.css">
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">-->
    <style type="text/css">
        .form-group{ margin-bottom:0px !important;}
        .form-control-feedback{top:0px !important;}
    </style>
</head>
<body>
    
    

 <br>  
    <div style="margin:auto;width:80%;">  
<form class="form" id="myform1" name="form1" method="post" action="<? echo $PHP_SELF ?>">
  <table class="table" width="100%" border="0" cellspacing="3" cellpadding="0">  
    <tr>  
      <td width="25%" align="right">ชื่อ นามสกุล </td>  
      <td align="left">  
        
<div class="form-group has-feedback" style="width:250px;">  
      <input class="form-control css-require" name="name" type="text" id="name"  />  
      <span class="glyphicon form-control-feedback" aria-hidden="true"></span>  
</div>        
       
      </td>  
    </tr>  
    
    
     <tr>
    <td><div class="col-xs-4 form-group has-feedback">
        <td><label for="product">เลือกปริมาณผลผลิต</label></td>
    <input class="form-control css-require" id="product" type="text" class="form-control" placeholder="ปริมาณผลผลิต ก.ก./ไร่">
    <span class="glyphicon form-control-feedback" aria-hidden="true"></span> 
      </div></td>
    
    </tr>
    
    <tr>
    <td><div align="right">
    <input type="submit" class="btn btn-primary"  name="Submit" value="Submit" />
  </div></td>
    </tr>
   
    </table>
  
  
   
    </div>
    
    
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>      
 <script type="text/javascript">
 $(function(){
     
     var obj_check=$(".css-require");
     $("#myform1").on("submit",function(){
         obj_check.each(function(i,k){
             var status_check=0;
             if(obj_check.eq(i).find(":radio").length>0 || obj_check.eq(i).find(":checkbox").length>0){
                 status_check=(obj_check.eq(i).find(":checked").length==0)?0:1;    
             }else{
                 status_check=($.trim(obj_check.eq(i).val())=="")?0:1;
             }
             formCheckStatus($(this),status_check);      
         });
         if($(this).find(".has-error").length>0){
              return false;
         }
     });
     
     obj_check.on("change",function(){
         var status_check=0;
         if($(this).find(":radio").length>0 || $(this).find(":checkbox").length>0){
             status_check=($(this).find(":checked").length==0)?0:1;    
         }else{
             status_check=($.trim($(this).val())=="")?0:1;
         }
         formCheckStatus($(this),status_check);       
     });
     
     var formCheckStatus = function(obj,status){
         if(status==1){
             obj.parent(".form-group").removeClass("has-error").addClass("has-success");
             obj.next(".glyphicon").removeClass("glyphicon-warning-sign").addClass("glyphicon-ok");    
         }else{
             obj.parent(".form-group").removeClass("has-success").addClass("has-error");
             obj.next(".glyphicon").removeClass("glyphicon-ok").addClass("glyphicon-warning-sign");      
         }
     }

 });
</script>   
</body>
</html>