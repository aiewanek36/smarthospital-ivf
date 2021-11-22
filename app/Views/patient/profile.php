<link rel="stylesheet" type="text/css" href="<?php echo base_url('plugins/jquery.Thailand.js/dist/jquery.Thailand.min.css');?>">

<style>
	#my_camera {
		width: auto !important;
		height: auto !important;
	}
</style>
<? $patient = $patient[0]; ?>
<form  id="add-form"  method="post" action="<?=site_url('patient/add');?>">
<input type="hidden" name="id_hn" id="id_hn" value="<?=$patient['id_hn']?>"  />
<div class="row">
	<!-- Female Data -->

    <div class="col-12 col-md-12 col-lg-12">
        <div class="portlet box red">
              <div class="portlet-title">
                <div class="caption">
            			<i class="fa fa-lg fa-user"></i> <span class="tr2"><strong>Profile</strong></span>
            	</div>
              </div>
        </div>
        
      
          <div class="row">
          <div class="col-12 col-lg-4">
           <fieldset style="background-color:#f4f4f4;text-align:center">
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="max-width:230px; max-height: 170px;">
                            <img src="" style="max-width:220px; max-height: 160px;">
                            <i class='fa fa-user' style="font-size:150px; color:#39F"></i>
                        </div>
                    </div>
          <div style="margin:5px;text-align:center;width:100%;">
                <button type="button" class="btn blue-madison" onClick="$('#take_img').css('display','none');$('#up_img').css('display','');$('#img_select_new').css('display','');"> <i class="fa fa-lg fa-cloud-upload"></i> Upload </button>
                <button type="button" class="btn red-sunglo" onClick="$('#up_img').css('display','none');$('#take_img').css('display','');opencamera();$('#img_select_new').css('display','');"> <i class="fa fa-lg fa-camera"></i> Camera </button>
            </div>
          	<div id="img_select_new" style="text-align:center; display:none">
                <div id="up_img" style="">
                    <div class="fileinput fileinput-new" data-provides="fileinput" id="select_file">
                        <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="max-width:230px; max-height: 170px;"></div>
                        <div>
                            <span class="btn btn-file">
                                <button type="button" class="btn green-meadow fileinput-new"> Select image </button>
                                <button type="button" class="btn yellow-crusta fileinput-exists"> Change </button>
                                <input type="file" name="..." accept="image/,.png,.jpg">
                                <input type="text" id="up1" name="up1" style="display:none">
                            </span>
                            <button type="button" class="btn grey-cascade fileinput-exists" data-dismiss="fileinput"> Remove </button>
                            <button type="button" onClick="$('#img_select_new').css('display','none')" class="btn red"><i class="fa fa-lg fa-times-circle-o"></i> Close</button>
                            
                        </div>
                    </div>
                </div>
                <div id="take_img" style="display:none">
                        <div id="cam">
                        	<input type="text" id="name_pic" name="pic" value="<?=$row_check['name_pic'];?>" style="display:none">
                            <div id="my_camera" style="margin:5px;"></div>
                             <div id="rs_cam" style="margin:3px;"></div>
                            <button type="button" class="btn green-seagreen" onClick="take()"> <i class="fa fa-lg fa-camera"></i> Take </button>
                            <button type="button" class="btn yellow-casablanca" onClick="clear_take()" style="margin:5px;"> <i class="fa fa-lg fa-recycle"></i> Clear </button>
                           
                        </div>
                    <button type="button" onClick="$('#img_select_new').css('display','none');$('#up_img').css('display','none');$('#take_img').css('display','none');" class="btn red"><i class="fa fa-lg fa-times-circle-o"></i> Close</button>
                </div>
                    
                </fieldset>
          </fieldset>
          
          <div class="row">
          	<?php echo view('tools/consent_menu'); ?>
          </div>
          <div class="row">
              <div class="col-md-12  mx-3 mt-3">
              <table width="100%" border="1" cellspacing="0" cellpadding="0">
              <tr>
                <td align="right" class=" pr-2"> <strong class="font-blue"><i class="fab fa-facebook-f"></i> Facebook : </strong>  </td>
                <td> <input class="mx-auto w-100" name="id_facebook" value="<?=$patient['id_facebook']?>"  type="text" placeholder="" /> </td>
              </tr>
              <tr>
                <td align="right" class=" pr-2"> <strong style="color:#090"> Wechat :</strong></td>
                <td><input  class="mx-auto w-100" name="id_wechat" value="<?=$patient['id_wechat']?>" type="text" placeholder="" /></td>
              </tr>
              <tr>
                <td align="right" class=" pr-2"><strong style="color:#45b6af"><i class="fab fa-line"></i> Line :</strong></td>
                <td><input class="mx-auto w-100" name="id_line" value="<?=$patient['id_line']?>" type="text" placeholder="" /> </td>
              </tr>
            </table>     
            </div>
		  </div>
          <div class="row">
          	 <div class="col-md-12 mt-3 text-center">
             		  <button type="button" name="button" value="idcard" class="btn red-sunglo w-100" 
		onclick="IDCardOpenScanner()"><i class="fa fa-folder-open" style="font-size:18px"></i>
                        <strong>IDCard Scanner</strong></button><br />
                        <button type="button" name="button" value="idcard" class="btn red-sunglo  mt-3 w-100" 
		onclick="PassportOpenScanner()"><i class="fa fa-folder-open" style="font-size:18px"></i><strong>Passport Scanner</strong></button>
             </div>
          </div>
          </div><!-- Picture -->
          
          <!-- Data -->
        	<div class="col-12 col-lg-8">
            <div class="row">
                <div class="col-md-12 pt-2 text-center">
                 <a href="<?php echo base_url('patient/profile')?>">
                 <button type="button" name="button" id="new"   value="New" class="btn btn-xs green  pt-2 pb-2" style="width:120px"  ><i class="fa fa-plus" style="font-size:24px"></i><br /><span class="tr1"><strong>New</strong></span></button> 
                 </a>
                 <button type="submit" name="button" id="save"   value="Save" class="btn btn-xs blue  pt-2 pb-2" style="width:120px"  ><i class="fa fa-floppy-o" style="font-size:24px"></i><br /><span class="tr1"><strong>Save</strong></span></button> 
                </div>
            </div>
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Registration </h1><br>
            <div class="table-responsive">
            <table class="table table-user-information justify-content-center" >
                <tbody>
                    <tr>
                      <td width="60" align="right"  ><strong> CN: </strong></td>
                      <td colspan="3" ><input  class="mx-auto text-center" name="HN"  type="text" value="<?=$patient['HN']?>" placeholder="" /></td>
                    </tr>
                    <tr>
                      <td align="right"  ><strong>Date Regis: </strong></td>
                      <td colspan="3" ><input  class="mx-auto text-center" name="DateIn"  type="text" value="<?=$patient['DateIn']!='' ? $patient['DateIn']:date('Y-m-d');?>" placeholder="" /></td>
                    </tr>
                    <tr>
                      <td align="right"  ><strong>VN: </strong></td>
                      <td colspan="3" ><input  class="mx-auto text-center" name="vn" type="text" placeholder="" /></td>
                    </tr>
                    <tr>
                      <td align="right"   ><strong>Name EN:</strong></td>
                      <td colspan="3" > <select name="Pname_en" id="Pname_en"  class="form-select mx-auto">
                              
                          </select>                       
                          <input class="mx-auto" value="<?=$patient['Fname_en']?>" name="Fname_en"   type="text" placeholder="" /> 
                           <input  class="mx-auto" type="text" value="<?=$patient['Lname_en']?>"  name="Lname_en" placeholder="" /></td>
                    </tr>
                    <tr>
                      <td align="right"><strong>Name TH:</strong></td>
                      <td colspan="3" ><select name="Pname" id="Pname" class="form-select mx-auto">
                        
                      </select>
                      <input class="mx-auto" name="Fname"  type="text" value="<?=$patient['Fname']?>"  placeholder="" />
                      <input  class="mx-auto" name="Lname" type="text" value="<?=$patient['Lname']?>"  placeholder="" /></td>
                    </tr>
                    <tr>
                      <td align="right"><strong>PID:</strong></td>
                      <td colspan="3" ><input name="PersonalID" class="mx-auto" type="text" placeholder=""  value="<?=$patient['PersonalID']?>"/> 
                      <button type="button" class="btn btn-xs purple" onClick="if(confirm('Do you want to scan?')) scan_idcard('pid','female');"><i class="fa fa-user" style="font-size:21px" aria-hidden="true"></i>&nbsp;Load</button>
                      </td>
                    </tr>
                    <tr>
                      <td align="right"><strong>Passport:</strong></td>
                      <td colspan="3" ><input  class="mx-auto" name="PassportNumber" type="text" value="<?=$patient['PassportNumber']?>"  placeholder="" />
                      <button type="button" class="btn btn-xs purple"  onClick="if(confirm('Do you want to scan?')) scan_idcard('passport','female');"><i class="fa fa-user" style="font-size:21px" aria-hidden="true"></i>&nbsp;Load</button>
					</td>
                    </tr>
                    <tr>
                      <td align="right"><strong>Nationality:</strong></td>
                      <td colspan="3" >
                      <input name="Nationality" <?=$patient['Nationality'] == 'Thai' || $patient['Nationality'] == '' ? 'checked':'';?> type="radio" id="radio" value="Thai" onchange="$('#Nationality_Oth').val(this.value)" /><span class="mx-2">Thai</span>
                      <input name="Nationality" <?=$patient['Nationality'] == 'Chinese' ? 'checked':'';?> type="radio" id="radio" value="Chinese" onchange="$('#Nationality_Oth').val(this.value)"  /><span class="mx-2">Chinese</span>
                      <input name="Nationality" onchange="$('#Nationality').css('display','')" <?=$patient['Nationality'] != 'Chinese' && $patient['Nationality'] != 'Thai' && $patient['Nationality'] != '' ? 'checked'.$nation_dis='':$nation_dis='none';?> id="Nationality_Oth" type="radio"  value="<?=$patient['Nationality']?>"  />
                       <span class="mx-2">Other</span>
                     <select class="form-select mx-auto" id="Nationality" onchange="$('#Nationality_Oth').val(this.value)" style="width:200px;display:<?=$nation_dis?>"  >
                     </select>
                       
                          
                        </td>
                    </tr>
                    <tr>
                      <td align="right"><strong>Race:</strong></td>
                      <td colspan="3" ><input name="Race" class="mx-auto" type="text" value="<?=$patient['Race']?>"  placeholder="" /></td>
                    </tr>
                    <tr>
                      <td align="right"><strong>D.O.B.:</strong></td>
                      <td colspan="3" ><select name="Bday" class="form-select mx-auto">
                        
                        <? for($i=1;$i<31;$i++){ ?>
                        	<option <?=$patient['Bday'] == str_pad($i, 2, "0", STR_PAD_LEFT) ? ' selected="selected"' : '';?> value="<?=str_pad($i, 2, "0", STR_PAD_LEFT)?>"><?=str_pad($i, 2, "0", STR_PAD_LEFT)?></option>
                        <? } ?>
                      </select>
                        <select name="Mday" class="form-select mx-auto">
                          
                          <? for($i=1;$i<=12;$i++){ 
								$monthNum  = $i;
								$dateObj   = DateTime::createFromFormat('!m', $monthNum);
								$monthName = $dateObj->format('F');
						  ?>
						  		<option <?=$patient['Mday'] == str_pad($i, 2, "0", STR_PAD_LEFT) ? 'selected=selected' : ''; ?> value="<?=str_pad($i, 2, "0", STR_PAD_LEFT)?>"><?=$monthName?></option>
                          <? } ?>
                      </select>
                        <select name="Yday"  class="form-select mx-auto">
                          
                           <? for($i=date('Y')-100;$i<date('Y');$i++){ ?>
                           <option <?=$patient['Yday'] == str_pad($i, 4, "0", STR_PAD_LEFT) ? 'selected=selected' : '' ; ?> value="<?=str_pad($i, 4, "0", STR_PAD_LEFT)?>"><?=str_pad($i, 4, "0", STR_PAD_LEFT)?></option>
                           <? } ?>

                      </select> <span class="mx-2"><strong>Age :</strong></span>  
                      <input  class="mx-auto text-center" disabled type="text" value="<?=(date('Y')-$patient['Yday'])?>"  size="5" placeholder="" /></td>
                    </tr>
                    <tr>
                      <td align="right"><strong>Telephone:</strong></td>
                      <td colspan="3" ><input name="Telephone"  class="mx-auto" type="text" value="<?=$patient['Telephone']?>" placeholder="" /></td>
                    </tr>
                    <tr>
                      <td align="right"><strong>Email:</strong></td>
                      <td colspan="3" ><input name="Email"  class="mx-auto" style="width:70%" type="text" value="<?=$patient['Email']?>" placeholder="" /></td>
                    </tr>
                    <tr>
                      <td align="right"><strong>Address:</strong></td>
                      <td colspan="3" ><input  name="Address" class="mx-auto" type="text" value="<?=$patient['Address']?>" placeholder="" /></td>
                    </tr>
                    <tr>
                      <td align="right"><strong>District:</strong></td>
                      <td width="155" >
                      <input name="district"  class="uk-input " autocomplete="off" size="15" value="<?=$patient['district']?>" type="text" placeholder="" /></td>
                      <td width="63" align="right" ><strong>Sub-district :</strong></td>
                      <td width="170" ><input name="sub_district"   class="uk-input  uk-width-1-1" autocomplete="off" value="<?=$patient['sub_district']?>" size="15" type="text" placeholder="" /></td>
                    </tr>
                    <tr>
                      <td align="right"><strong>Province:</strong></td>
                      <td ><input   name="province"  class="uk-input  uk-width-1-1" autocomplete="off" size="15" type="text" value="<?=$patient['province']?>" placeholder="" /></td>
                      <td align="right" ><strong>Postal Code :</strong></td>
                      <td ><input name="zipcode"  class="uk-input  uk-width-1-1" autocomplete="off" value="<?=$patient['zipcode']?>" type="text" size="10" placeholder="" /></td>
                    </tr>
                    <tr>
                      <td align="right" valign="top"><strong>Note:</strong></td>
                      <td colspan="3" >
                      <textarea name="Note" id="Note" class="w-100 text-danger" rows="5"><?=$patient['Note']?></textarea></td>
                  </tr>
                </tbody>
            </table>
            </div>
        </div>
    </div>                                       
            </div>
            <!-- Data -->
        </div>
        
        
        
    </div>
    <!-- Female Data -->
    
    
    
    
    
    
    
    
    
    
    
    
    
    <?php /*?>
    
    <!-- Male Data -->
    <div class="col-12 col-md-12 col-lg-6">
        <div class="portlet box blue">
            <div class="portlet-title">
                    <div class="caption">
            			<i class="fa fa-lg fa-user" style="f"></i> <span class="tr2"><strong>Spouse</strong></span>
                    </div>
          </div>
        </div>
    </div>
    <!-- Male Data --><?php */?>
    

</div>
</form>
<script type="text/javascript" src="<?php echo base_url('plugins/webcam/webcam.js')?>"></script>
<script>
function PassportOpenScanner(){
	window.location.href='WorldMedicScannerPassport://WorldMedicScannerPassportProtocol';
}
function IDCardOpenScanner(){
	window.location.href='WorldMedicScannerIDCard://WorldMedicScannerIDCardProtocol';
}
</script>
<!--/* ถ่ายภาพ */-->
<script language="JavaScript">
    function opencamera() {
        Webcam.set({
            width: 230,
            height: 170,
            image_format: 'png',
            jpeg_quality: 90
        });
        Webcam.attach('#my_camera');
    }

    function closecamera() {
            Webcam.reset();
    }

    function take() {
        Webcam.snap(function(data_uri) {
            $('#cam').css('display', '');
            $('#rs_cam').css('display', '');
			$('#my_camera').css('display','none');
            $('#rs_cam').html(
                '<img src="' + data_uri + '"/>' +
                '<input type="text" id="img_cam" name="img_data" value="' + data_uri + '" style="display:none">'
            );
			//alert(data_uri);
        });
    }

    function clear_take() {
        $('#rs_cam').css('display', 'none');
		$('#my_camera').css('display','');
        $('#rs_cam').html('');
    }
	
	function Check_Img() {
        if ($('#up_img').css('display') != 'none') {
            var img = $('#select_file img').attr('src');
        } else if ($('#take_img').css('display') != 'none') {
            var img = $('#rs_cam img').attr('src');
        } else {
			var img = $('#name_pic').val();
        }
        $('#name_pic').val(img);
        var id_hn = '<?=$id_hn;?>';
        if (id_hn <= 0) {
            var type_new = $('#type_new').val();
        } 
	}
</script>
<script src="<?php echo base_url("plugins/js/jquery-1.11.3.min.js");?>"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.20/js/uikit.min.js"></script>
   	

    <!-- dependencies for zip mode -->
    <script type="text/javascript" src="<?php echo base_url("plugins/jquery.Thailand.js/dependencies/zip.js/zip.js")?>"></script>
    <!-- / dependencies for zip mode -->
    <script type="text/javascript" src="<?php echo base_url("plugins/jquery.Thailand.js/dependencies/JQL.min.js")?>"></script>
    <script type="text/javascript" src="<?php echo base_url("plugins/jquery.Thailand.js/dependencies/typeahead.bundle.js")?>"></script>
    <script type="text/javascript" src="<?php echo base_url("plugins/jquery.Thailand.js/dist/jquery.Thailand.min.js")?>"></script>
    <script type="text/javascript">
        $.Thailand({
            database: '<?php echo base_url("plugins/jquery.Thailand.js/database/db.json")?>', 

            $district: $('#add-form [name="district"]'),
            $amphoe: $('#add-form [name="sub_district"]'),
            $province: $('#add-form [name="province"]'),
            $zipcode: $('#add-form [name="zipcode"]'),

            onDataFill: function(data){
                console.info('Data Filled', data);
            },

            onLoad: function(){
                console.info('Autocomplete is ready!');
                $('#loader, .demo').toggle();
            }
        });

        // watch on change

        $('#add-form [name="district"]').change(function(){
            console.log('ตำบล', this.value);
        });
        $('#add-form [name="sub_district"]').change(function(){
            console.log('อำเภอ', this.value);
        });
        $('#add-form [name="province"]').change(function(){
            console.log('จังหวัด', this.value);
        });
        $('#add-form [name="zipcode"]').change(function(){
            console.log('รหัสไปรษณีย์', this.value);
        });
</script>
    
    
<!-- Script -->
<script type="text/javascript">

$(document).ready(function(){
	$.ajax({
	 type: 'POST',
	 url: '<?php echo  base_url() ?>/Patient/DataArray',
	 dataType: 'json',
	 data: {
	 	table: 'country',
		field: 'nationality',
		name: 'nationality',
	 },
	 cache: false,
	 success: function (result) {
	 		$('#Nationality').find('option').remove().end().append(result).val('<?=$patient['Nationality']?>');
	 }
    });

 	$.ajax({
	 type: 'POST',
	 url: '<?php echo  base_url() ?>/Patient/DataArray',
	 dataType: 'json',
	 data: {
	 	table: 'tb_titlename',
		field: 'title_name',
		name: 'title_name',
    where: 'status="EN"',
	 },
	 cache: false,
	 success: function (result) {
		  $('#Pname_en').find('option').remove().end().append(result).val('<?=$patient['Pname_en']?>');
	 }
    });


    $.ajax({
	 type: 'POST',
	 url: '<?php echo  base_url() ?>/Patient/DataArray',
	 dataType: 'json',
	 data: {
	 	table: 'tb_titlename',
		field: 'title_name',
		name: 'title_name',
    where: 'status="TH"',
	 },
	 cache: false,
	 success: function (result) {
	 	 $('#Pname').find('option').remove().end().append(result).val('<?=$patient['Pname']?>');
	   }
  });
});
</script>