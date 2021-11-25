<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('plugins/btn.css');?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('plugins/font-awesome/css/font-awesome.min.css');?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url("plugins/bootstrap-toastr/toastr.min.css");?>"/> 
<link rel="stylesheet" type="text/css" href="<?php echo base_url("plugins/bootstrap-fileinput/bootstrap-fileinput.css");?>"/>

<style type="text/css">
body {
	background-image:url('assets/background/bgmain.jpg');
	background-repeat: repeat-x;
	background-size:cover;
	font-family: 'Maitree', serif;
}
.centered {
  position: fixed;
  top: 50%;
  left: 50%;
  /* bring your own prefixes */
  transform: translate(-50%, -50%);
}
</style>
<body>
<div class="centered">
<form action="login/Auth" method="post">
  <img src="assets/logo.png" alt="" height="50px">
  <table width="985" height="428" border="0" align="center" cellpadding="0" cellspacing="0" style="background-image:url(assets/background/bg-login.png);width:985;height:428">
                              <tr><td>
                              <table width="500" height="197" border="0" align="" cellpadding="0" cellspacing="0">
                                <tr>
                                  <td align="left" valign="top">&nbsp;</td>
                                </tr>
                                <tr>
                                  <td height="134" align="center">
                                  <?php if(session()->getFlashdata('msg')):?>
                                      <div class="alert alert-warning">
                                          <?= session()->getFlashdata('msg') ?>
                                      </div>
                                  <?php endif;?>
                                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                      <td height="5" colspan="4">&nbsp;</td>
                                    </tr>
                                    <tr>
                                      <td>&nbsp;</td>
                                      <td>&nbsp;</td>
                                      <td width="279" align="left">&nbsp;</td>
                                      <td width="46" align="left">&nbsp;</td>
                                    </tr>
                                    <tr>
                                      <td width="172" align="right" class="tr1"><b>Username : </b></td>
                                      <td width="3">&nbsp;</td>
                                      <td align="left"><input name="usern" type="text" id="usern"   style="width:85%; height:25px" autofocus  required/></td>
                                      <td align="left">&nbsp;</td>
                                    </tr>
                                    <tr align="right">
                                      <td height="5" colspan="4"></td>
                                    </tr>
                                    <tr>
                                      <td align="right" class="tr1"><b>Password : </b></td>
                                      <td>&nbsp;</td>
                                      <td align="left"><input name="passw" type="password" id="passw"   style="width:85%; height:25px"  required/></td>
                                      <td align="left">&nbsp;</td>
                                    </tr>
                                    <tr>
                                      <td height="5"></td>
                                    </tr>
                                    <tr>
                                      <td>&nbsp;</td>
                                      <td>&nbsp;</td>
                                      <td align="center">&nbsp;</td>
                                      <td align="center">&nbsp;</td>
                                    </tr>
                                  </table></td>
                                </tr>
                                <tr>
                                  <td height="5"></td>
                                </tr>
                                <tr>
                                  <td align="right" valign="top"><table width="100%" border="0" align="right" cellpadding="0" cellspacing="0">
                                    <tr>
                                      <td width="40%" align="center">&nbsp;</td>
                                      <td align="center"><table width="0" border="0" align="left" cellpadding="0" cellspacing="0">
                                        <tr>
                                          <td><button type="submit" name="button2" id="button2"   value="Submit" class="btn btn-xs blue" style="width:100px; height:35px" ><i class="fa fa-lock"></i> Submit</button> 
                                          </td>
                                          <td>&nbsp;</td>
                                          <td align="left"><a href="../"><button type="button" name="button2" id="button2" value="Exit" class="btn btn-xs red" style="width:100px; height:35px" ><i class="fa fa-power-off" s></i> Exit
                                          </button></a>
                                          </td>
                                        </tr>
                                      </table>
                                      
                                      
                                      </td>
                                    </tr>
                                  </table></td>
                                </tr>
                              </table>
                              </td>
                              </tr>
                              </table>
</form>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td>&nbsp;</td>
            <td width="686" align="right" valign="middle"><a href="http://www.worldmedic.com">&copy; Copyrights WorldMedic Information &amp; Technology. All Rights Reserved.1998 - 2030&nbsp;&nbsp;</a></td>
            <td width="249" height="43" align="left" valign="middle"><a href="http://www.worldmedic.com/"><img src="assets/background/worldmedic1.png" alt="" width="89" height="44" border="0" /></a></td>
            <td>&nbsp;</td>
          </tr>
        </table>
         </div>               
</body>
</html>
<script type="text/javascript" src="<?php echo base_url("plugins/bootstrap/js/bootstrap.min.js"); ?>"></script>
<script src="<?php echo base_url("plugins/bootstrap-toastr/toastr.min.js");?>"></script> 
<script type="text/javascript" src="<?php echo base_url("plugins/jquery.validate.bootstrap-tooltip.js");?>"></script>
