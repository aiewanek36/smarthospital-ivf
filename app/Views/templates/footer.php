</div>
<div id="footer-wrapper">
<table width="100%" height="50" border="0" align="center" cellpadding="0" cellspacing="0" background="<?php echo base_url("assets/background/".$theme['footer']['file'])?>?v=1.1" style="margin-top:5px">
    <tr>
        <td align="center" valign="top" style="padding-top:10px">
            <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                    <td valign="bottom" width="200" align="right"><a href="http://www.worldmedic.com/" target="_blank" class="footer"> &copy; Copyright  WorldMedic Information &amp; Technology. All Rights Reserved.1998-2025 </a></td>
                    <td width="1px"></td>
                    <td width="90px" align="left"><img src="<?php echo base_url("assets/background/logo-wmd-white.png?v=1.1")?>" width="90" height="25" /></td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</div>
<script src="<?php echo base_url("plugins/js/jquery-1.11.3.min.js");?>"></script>
<script src="<?php echo base_url("plugins/js/jquery-ui.js");?>"></script>
<script src="<?php echo base_url("plugins/bootstrap/js/bootstrap.min.js");?>"></script>
<script src="<?php echo base_url("plugins/bootstrap-datepicker/js/bootstrap-datepicker.js");?>"></script>
<script src="<?php echo base_url("plugins/bootstrap-datepicker/js/locales/bootstrap-datepicker.th.js");?>" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo base_url("plugins/bootstrap-fileinput/bootstrap-fileinput.js");?>"></script>
<script src="<?php echo base_url("plugins/select2/select2.min.js")?>"></script>
<script src="<?php echo base_url("plugins/fancyBox/source/jquery.fancybox.js");?>"></script>

<style>
/* #footer-wrapper {
   position:absolute;
   bottom:0;
   width:100%;
   height:60px;   /* Height of the footer */
} 
</style>
<script>
    $('.datepicker').datepicker({
    format: 'yyyy-mm-dd',
    todayBtn: true,
    language: 'th',             
    thaiyear: true ,
    autoclose: true            
  }).datepicker("setDate", "0");

</script>