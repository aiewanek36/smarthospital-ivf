<? for($i=0;$i<12;$i++){ ?>
<div class="col-6 col-md-6  text-center pt-2">
<button type="button" name="print" id="print" style=" width:100%" value="print" class="btn btn-md blue-hoki"   onClick="window.open('doctor_form_follow.php?id_hn=<?php echo $id_hn; ?>');" ><i class="fa fa-file-text-o" style="font-size:18px;"></i> Med Cert</button> 
</div>
<? } ?>