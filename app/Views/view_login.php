<?php
defined('BASEPATH') OR exit('No direct script access allowed');


// function alert($msg) {echo "<script type='text/javascript' charset='UTF-8'>alert('$msg');</script>";}
function alertMsg($Msg) {echo "<script type='text/javascript'>AlertMsg('$Msg');</script>";}
// function back() {echo "<script type='text/javascript'>window.history.back();</script>";}
// function re($to) {echo "<script type='text/javascript'>window.location.href='$to';</script>";}

?><!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
	<title>Pure login | SmartDrugstoreSky</title>
  <link rel="shortcut icon" href="icon.ico">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('../assets-pure/plugins/btn.css');?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('../assets-pure/plugins/font-awesome/css/font-awesome.min.css');?>">
		<script type="text/javascript" src="<?php echo base_url("../assets-pure/plugins/fancyBox/lib/jquery-1.10.1.min.js"); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url("../assets-pure/plugins/bootstrap/js/bootstrap.min.js"); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url("../assets-pure/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"); ?>"></script>
        <script src="<?php echo base_url("../assets-pure/plugins/jquery.numberic.js");?>"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url("../assets-pure/plugins/bootstrap-toastr/toastr.min.css");?>"/> 
        <link rel="stylesheet" type="text/css" href="<?php echo base_url("../assets-pure/plugins/bootstrap-fileinput/bootstrap-fileinput.css");?>"/>
        <script src="<?php echo base_url("../assets-pure/plugins/bootstrap-toastr/toastr.min.js");?>"></script> 
        <script src="<?php echo base_url("../assets-pure/plugins/bootstrap-toastr/ui-toastr.js");?>"></script>
        <script src="<?php echo base_url("../assets-pure/plugins/bootbox.js");?>"></script>
        <link rel="stylesheet" href="<?php echo base_url("../assets-pure/plugins/j/autocomplete2.css");?>"  type="text/css"/>
        <script type="text/javascript" src="<?php echo base_url("../assets-pure/plugins/j/autocomplete.js");?>"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url("../assets-pure/plugins/bootstrap-clockpicker/bootstrap-clockpicker.min.css");?>"/>
        <script type="text/javascript" src="<?php echo base_url("../assets-pure/plugins/bootstrap-clockpicker/bootstrap-clockpicker.min.js");?>"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url("../assets-pure/plugins/bootstrap-datepicker/css/datepicker3.css");?>"/>
        <script type="text/javascript" src="<?php echo base_url("../assets-pure/plugins/bootstrap-fileinput/bootstrap-fileinput.js");?>"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url("../assets-pure/plugins/bootstrap-select/bootstrap-select.min.css");?>"/>
        <script type="text/javascript" src="<?php echo base_url("../assets-pure/plugins/bootstrap-select/bootstrap-select.min.js");?>"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url("../assets-pure/plugins/jquery-multi-select/css/multi-select.css");?>"/>
        <script type="text/javascript" src="<?php echo base_url("../assets-pure/plugins/jquery-multi-select/js/jquery.multi-select.js");?>"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url("../assets-pure/plugins/select2/select2.css");?>"/>
        <script type="text/javascript" src="<?php echo base_url("plugins/select2/select2.min.js");?>"></script>
        <link rel="stylesheet" href="<?php echo base_url("../assets-pure/plugins/contaxtMenu/dist/jquery.contextMenu.css");?>" type="text/css" media="screen">
        <script type="text/javascript" src="<?php echo base_url("../assets-pure/plugins/contaxtMenu/src/jquery.ui.position.js");?>"></script>
        <script type="text/javascript" src="<?php echo base_url("plugins/contaxtMenu/src/jquery.contextMenu.js");?>"></script>
        <script type="text/javascript" src="<?php echo base_url("../assets-pure/plugins/jquery.validate.js");?>"></script>
        <script type="text/javascript" src="<?php echo base_url("../assets-pure/plugins/jquery.validate.bootstrap-tooltip.js");?>"></script>
        <script type="text/javascript" src="<?php echo base_url("../assets-pure/plugins/jquery.pulsate.min.js");?>"></script>
<style>
    body {
      font-family: 'Maitree', serif;
      font-size: 14px;

      /* background-image: url('../../../assets-pure/imgpure/bgmain.jpg'); */
      background-image: url(<?php echo base_url('../assets-pure/imgpure/bgmain.jpg');?>);
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
  }
</style>
<body>
<table class="my-auto" width="985" height="600" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
  <td>
    <div class="py-5 my-5">
    </div>
  </td>
</tr>
  <tr>
    <td>
      <!-- <table width="985" height="428" border="0" align="center" cellpadding="0" cellspacing="0" style="background:url('../../../assets-pure/imgpure/bg-login.png') no-repeat; background-position:center;"> -->
      <table width="985" height="428" border="0" align="center" cellpadding="0" cellspacing="0" style="background: url(<?php echo base_url('../assets-pure/imgpure/bg-login.png');?>) no-repeat; background-position:center;">
        <tr>
          <td height="350" align="left"><br>
            <br>
            <br>
            <table width="985" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="47">&nbsp;</td>
                <td width="938" align="left" valign="top"><table width="100" height="233" border="0" align="left" cellpadding="0" cellspacing="0">
                  <tr>
                    <td align="left" valign="top">
                      <form action="#" onsubmit="return SubMit();" method="post" id="form_login_x" name="form_login_x">
                      <!-- <form name="login" action="<?php //echo base_url()?>Auth/" method="post"> -->
                      <table width="352" height="202" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-top: 18px;">
                        <tr>
                          <td align="left" valign="top">&nbsp;</td>
                        </tr>
                        <tr>
                          <td align="center"><table style="width:300px;" border="0" cellspacing="0" cellpadding="0">
								            <tr>
                              <td height="5" colspan="3">&nbsp;</td>
                            </tr>
								            <tr>
                              <td style="width:135px; padding-right:10px;" align="right"><font color="#000000"> <b>Username : </b></font></td>
                              <td >&nbsp;</td>
                              <td align="left" style="width:165px;">
                              <input class="form-control" type="hidden" name="csrf_token" id="csrf_token" size="20" value="<?php echo $this->security->get_csrf_hash(); ?>">
                              <input class="form-control" type="text" name="usern" id="user" size="20" required>
                              </td>
                            </tr>
                            <tr>
                              <td style="padding-right:10px;" align="right"><font color="#000000"><b>Password : </b></font></td>
                              <td>&nbsp;</td>
                              <td align="left"><input class="form-control" name="passw" type="password" id="pass" size="20"></td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td align="left" style="width: 300px;">
                                &nbsp;
                                <a style="font-size: 14px;" href="javascript:popup('forgetpass2.php','',350,150)" >
                                   <font color="#FF0000"> เปลี่ยนรหัสผ่าน </font></a> |
                                     <a style="font-size: 14px;" href="javascript:popup('forgetpass.php','',300,150)" >
                                     <font color="#FF0000">ลืมรหัสผ่าน</font></a></td>
                                  </tr>
                              </table></td>
                            </tr>
                            <tr>
                              <td height="5"></td>
                            </tr>
                            <tr>
                              <td align="right" valign="top"><table width="100%" border="0" align="right" cellpadding="0" cellspacing="0">
                                <tr>
                                  <td width="33%" align="right">&nbsp;</td>
                                  <td align="left"><table width="0" border="0" align="left" cellpadding="0" cellspacing="0">
                                    <tr>
                                      <td>
                                        <button class="btn text-center btn-success ml-3" type="submit" name="button" id="button" value="OK" style="width:80px; border: 2px solid green;">Submit</button>
                                      <td>&nbsp;</td>
                                      <td align="left">
                                        <button class="btn text-center btn-danger" type="reset" name="button2" id="button2" value="Cancel" style="width:80px; border: 2px solid #ab0202;">Cancel</button>                                  </td>
                                    </tr>
                                  </table></td>
                                  </tr>
                              </table></td>
                            </tr>
                          </table>
                      </form></td>
                    </tr>
                  </table></td>
                </tr>
              </table>
              <br />
              <br />
              <br />
          <p>&nbsp;</p>          </td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
<script>
    $(document).ready(function() {
        $(document)
            .ajaxStart(function () {
            $('body').append('<div class="page-loading"><img src="<?php echo base_url('../assets-pure/imgpure/loading-spinner-blue.gif');?>"/>&nbsp;&nbsp;<span>Loading...</span></div>');
        })
            .ajaxStop(function () {
            window.setTimeout(function() {
                $('.page-loading').remove();
            }, 10);
        });

        UIToastr.init();
        $("form").validate();
        bootbox.setLocale('th');

        $('#user').focus();
    });

    function SubMit(){
      $.ajaxSetup({
      headers: {
          '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>'
      }
    });
    // 
    var token =$('#csrf_token').val();
    var userName =$('#user').val();
    var passwd =$('#pass').val(); 
    
        $.ajax({
            'type': 'POST',
            'url': '<?php echo base_url("Auth/index"); ?>',
            'cache': false,
            'data': {'<?php echo $this->security->get_csrf_token_name(); ?>':'<?php echo $this->security->get_csrf_hash(); ?>',usern: userName,passw:passwd},
            'success': function (result) {
                var result = $.parseJSON(result);
                console.log(result);
                if(result.status == 'success'){
                    // var name;
                    var name =result.name;
                  AlertMsg('ยินดีต้อนรับ '+name,'<?php echo base_url("Pos/"); ?>');
                }else{
                    AlertMsg('ชื่อเข้าใช้งาน หรือ รหัสผ่าน ไม่ถูกต้อง');
                    $("#form_login_x")[0].reset();
                }
            },
            'error': function () {
                AlertMsg('ตรวจพบปัญหาในการเชื่อมต่อเครือข่าย','<?php echo base_url("login/")?>');
            }
        });
        return false;
    }

    toastr.options = {
        "closeButton": true,
        "debug": false,
        "positionClass": "toast-top-right",
        "onclick": null,
        "showDuration": "10",
        "hideDuration": "10",
        "timeOut": "2000",
        "extendedTimeOut": "10",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }

    function AlertConfirm(message,url){
        bootbox.confirm(message, function(result) {
            if (result) {
                if(url){
                    window.location.href=''+url+'';
                }
            }
        });
    }

    function AlertMsg(message,url){
        bootbox.alert(message, function() {
            if(url){
                window.location.href=''+url+'';
            }
        });
    }
</script>

