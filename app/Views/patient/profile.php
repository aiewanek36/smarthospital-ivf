<link rel="stylesheet" type="text/css" href="<?php echo base_url('plugins/jquery.Thailand.js/dist/jquery.Thailand.min.css');?>">

<style>
	#my_camera {
		width: auto !important;
		height: auto !important;
	}
  input[type=text]:disabled {
    background: #dddddd;
  }
  input[type=checkbox]
  {
  /* Double-sized Checkboxes */
  -ms-transform: scale(2); /* IE */
  -moz-transform: scale(2); /* FF */
  -webkit-transform: scale(2); /* Safari and Chrome */
  -o-transform: scale(2); /* Opera */
  padding: 10px;
  }
  
</style>
<? $patient = $patient[0];
   
	
?>



<form  id="add-form" onsubmit="return Check_Img();"  method="post" action="<?=site_url('patient/add');?>">
<!-- Send VN -->


<div  class="row mt-2 mb-2 justify-content-center ">
    
    <div class="col-md-12 pt-2 text-center">
     <a href="<?php echo base_url('patient/profile')?>">
     <button type="button" name="button" id="new"   value="New" class="btn btn-xs green  pt-2 pb-2" style="width:120px"  ><i class="fa fa-plus" style="font-size:24px"></i><br /><strong>New</strong></button> 
     </a>
     <button type="submit" name="button" id="save"   value="Save" class="btn btn-xs blue  pt-2 pb-2" style="width:120px"  ><i class="fa fa-floppy-o" style="font-size:24px"></i><br /><strong>Save</strong></span></button> 
     
     <a href="#divSend" id="SendForm">
          <button type="button" name="button" id="Send"  value="Send" class="btn btn-xs yellow fancybox pt-2 pb-2" style="width:120px"  ><i class="fa fa-share-square-o" style="font-size:24px"></i><br /><strong>Send VN</strong></button> 
          <button type="submit" name="button" id="send_btn"   value="Send" style="display:none">
        </a>
    </div>
</div>

<div id="divSend2" style="display:none"></div>
<div id="divSend" style="display:none">
  		 <div class="table-responsive">
            <table class="table table-user-information justify-content-center" >
            <tbody>
                <tr>
                	<td align="right"><strong>Visit By:</strong></td>
                    <td align="center" bgcolor="#FFCCFF"><strong>
                      <input type="checkbox" name="send_f" id="send_f" value="f"  onchange="switch_visit(this)" checked="checked" />
                      &nbsp; &nbsp; &nbsp;
                    <?=getName($patient['id_hn'])?></strong></td>
                    <td align="center" bgcolor="#99CCFF"><strong>
                       <input type="checkbox" name="send_m" id="send_m" value="m"  onchange="switch_visit(this)" checked="checked" /> &nbsp; &nbsp; &nbsp;
                    <?=getName($patient['spouse'])?></strong></td>
                </tr>
                <tr>
                  <td align="right"><strong>Doctor Visit:</strong></td>
                  <td align="center" bgcolor="#FFFFFF"><select  id="doctor_f" name="doctor_f"  class="form-select mx-auto w-100"></select></td>
                  <td align="center" bgcolor="#FFFFFF"><select  id="doctor_m" name="doctor_m"   class="form-select mx-auto w-100"></select></td>
                </tr>
                <tr>
                  <td align="right"><strong>Detail</strong></td>
                  <td><select  id="select_f" onChange="add_detail(this.value,'f')"  class="form-select mx-auto w-100"></select></td>
                  <td><select  id="select_m" onChange="add_detail(this.value,'m')" class="form-select mx-auto w-100"></select></td>
                </tr>
                <tr>
                  <td align="right">&nbsp;</td>
                  <td><textarea name="detail_f" id="detail_f"  class="w-100 "   rows="5"></textarea></td>
                  <td><textarea name="detail_m" id="detail_m"  class="w-100 "   rows="5"></textarea></td>
                </tr>
            </tbody>
            </table>
         </div>
         
         <div class="col-md-12 text-center">
                   <button type="submit" name="button" id="Send"  onclick="send_vn();"   value="Send" class="btn btn-xs yellow  pt-2 pb-2" style="width:120px"  ><i class="fa fa-share-square-o" style="font-size:24px"></i><br /><strong>Send VN</strong></button> 
         </div>
</div>



<!-- Send VN -->
<input type="hidden" name="id_hn" id="id_hn" value="<?=$patient['id_hn']?>"  />
<input type="hidden" name="spouse" id="spouse" value="<?=$patient['spouse']?>"  />

	<!-- Female Data -->
    <div class="col-12 col-md-12 <?=$patient['spouse']<>'' ? 'col-lg-6' : 'col-lg-12'?>">
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
                            <? if(!empty($patient["Picture"])){ ?>   
                              <input name="picture" type="hidden" value="<?=$patient["Picture"]?>" /> 
                              <img src="<?=base_url().$patient["Picture"]?>" style="max-width:220px; max-height: 160px;">
                            <? } ?>
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
                        	<input type="text" id="name_pic" name="name_pic" value="<?=$patient["Picture"];?>" style="display:none">
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
              <div class="col-md-12  ">
              <table width="100%"  cellspacing="0" cellpadding="0">
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
        <div class="col-md-12">
            <h1 class="text-center">Registration </h1><br>
            <div class="table-responsive">
            <table class="table table-user-information justify-content-center" >
                <tbody>
                    <tr>
                      <td width="60" align="right"  ><strong> CN: </strong></td>
                      <td ><input  class="mx-auto text-center" name="HN" disabled  type="text" value="<?=$patient['HN']?>" placeholder="" /></td>
                      <td align="right" ><strong>Patient Type:</strong></td>
                      <td >
                      <select name="PatientType" id="PatientType"  class="form-select mx-auto">
                      </select>
                      </td>
                    </tr>
                    <tr>
                      <td align="right"  ><strong>Date Regis: </strong></td>
                      <td colspan="3" ><input  class="mx-auto text-center" name="DateIn"  type="text" value="<?=$patient['DateIn']!='' ? $patient['DateIn']:date('Y-m-d');?>" placeholder="" /></td>
                    </tr>
                    <tr>
                      <td align="right"  ><strong>VN: </strong></td>
                      <td colspan="3" ><input  class="mx-auto text-center" disabled name="vn" type="text" placeholder="" /></td>
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
                        <select name="Yday" onchange="$('#age').val(new Date().getFullYear()-this.value)"  class="form-select mx-auto">
                          
                           <? for($i=date('Y')-100;$i<date('Y');$i++){ ?>
                           <option <?=$patient['Yday'] == str_pad($i, 4, "0", STR_PAD_LEFT) ? 'selected=selected' : '' ; ?> value="<?=str_pad($i, 4, "0", STR_PAD_LEFT)?>"><?=str_pad($i, 4, "0", STR_PAD_LEFT)?></option>
                           <? } ?>

                      </select> <span class="mx-2"><strong>Age :</strong></span>  
                      <input  class="mx-auto text-center" id="age" disabled type="text" value="<?=$patient['Yday']<>'' ? (date('Y')-$patient['Yday']) : '';?>"  size="5" placeholder="" /></td>
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
                      <td width="144" >
                      <input name="district"  class="uk-input " autocomplete="off" size="15" value="<?=$patient['district']?>" type="text" placeholder="" /></td>
                      <td width="122" align="right" ><strong>Sub-district :</strong></td>
                      <td width="128" ><input name="sub_district"   class="uk-input  uk-width-1-1" autocomplete="off" value="<?=$patient['sub_district']?>" size="15" type="text" placeholder="" /></td>
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
                  <tr>
                      <td align="right" valign="top"><strong>Underlying Disease:</strong></td>
                      <td colspan="3" ><textarea name="underlying" id="underlying"  class="w-100 text-danger"   rows="3"><?=$patient['underlying']?></textarea></td>
                    </tr>
                     <tr>
                      <td align="right" valign="top"><strong>Drug Allergy:</strong></td>
                      <td colspan="3" ><textarea name="drug_allergy" id="drug_allergy"  class="w-100 text-danger"   rows="3"><?=$patient['drug_allergy']?></textarea></td>
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
			$('#name_pic').val(img);
        } else if ($('#take_img').css('display') != 'none') {
            var img = $('#rs_cam img').attr('src');
			$('#name_pic').val(img);
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
	 cache: true,
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
	 cache: true,
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
	 cache: true,
	 success: function (result) {
	 	 $('#Pname').find('option').remove().end().append(result).val('<?=$patient['Pname']?>');
	   }
  });
  
  $.ajax({
	 type: 'POST',
	 url: '<?php echo  base_url() ?>/Patient/DataArray',
	 dataType: 'json',
	 data: {
	 	table: 'tb_group_patient',
		field: 'name',
		name: 'name',
	 },
	 cache: true,
	 success: function (result) {
	 	 $('#PatientType').find('option').remove().end().append(result).val('<?=$patient['PatientType']?>');
	   }
  });
  
  
  
  $.ajax({
	 type: 'POST',
	 url: '<?php echo  base_url() ?>/Patient/DataArray',
	 dataType: 'json',
	 data: {
	 	table: 'operation',
		field: 'name',
		name: 'name',
	 },
	 cache: true,
	 success: function (result) {
	 	 $('#select_f').find('option').remove().end().append(result).val('');
		 $('#select_m').find('option').remove().end().append(result).val('');

	  }
  });
  
  
  $.ajax({
	 type: 'POST',
	 url: '<?php echo  base_url() ?>/Patient/DataArray',
	 dataType: 'json',
	 data: {
	 	table: 'tb_doctor',
		field: 'id_doctor',
		name: 'id_doctor',
		func: 'getDr',
	 },
	 cache: true,
	 success: function (result) {
	 	 $('#doctor_f').find('option').remove().end().append(result).val('<?=$patient['doctor']?>');
		 $('#doctor_m').find('option').remove().end().append(result).val('<?=$patient['doctor']?>');
	  }
  });
  
});
</script>
<script type="text/javascript">
  $(function(){
    $("#SendForm").fancybox({
			openEffect: 'elastic',
			closeEffect: 'elastic',
			prevEffect: 'fade',
			nextEffect: 'fade',
			fitToView: false, // images won't be scaled to fit to browser's height
			maxWidth: "90%", // images won't exceed the browser's width
			minWidth: "60%", // images won't exceed the browser's width
		});
  });
  
  function add_detail(value,sex){
	  var detail =  $('#detail_'+sex).val();
	  if(detail == ''){
		  $('#detail_'+sex).val(value);
	  }else{
		  $('#detail_'+sex).val(detail+', '+value);
	  }
  }
  
  function switch_visit(a){
	  var sex = a.value;
	  if(a.checked == true){
		  $('#select_'+sex).css('background-color','#FFF').prop('disabled', false);
	  	$('#detail_'+sex).css('background-color','#FFF').prop('readonly', false);
		  $('#doctor_'+sex).css('background-color','#FFF').prop('readonly', false);
	  }else{
		  $('#select_'+sex).css('background-color','#CCC').prop('disabled', true);
		  $('#detail_'+sex).css('background-color','#CCC').prop('readonly', true);
		  $('#doctor_'+sex).css('background-color','#CCC').prop('readonly', true);
	  }
  }


  function send_vn(){
    parent.$('#divSend2').html($('#divSend'));
    $('#divSend2').css('display','none');
    $('#send_btn').trigger('click');
  }
  
</script>