<link rel="stylesheet" type="text/css" href="<?php echo base_url('plugins/jquery.Thailand.js/dist/jquery.Thailand.min.css');?>">

<style>

	#my_camera {
		width: auto !important;
		height: auto !important;
	}
  input[type=text]:disabled {
    background: #dddddd;
  }
</style>
<? $patient = $spouse[0];  ?>
        <!-- Female Data -->
        <div class="col-12 col-md-12 col-lg-6">
            <div class="portlet box blue mx-auto" >
                  <div class="portlet-title">
                    <div class="caption text-light">
                  		<a class="text-light" href="<?=base_url("patient/profile/".$patient['id_hn'])?>"><i class="fa fa-lg fa-user"></i> <strong>Spouse</strong></a>
                    </div>
                  </div>
            </div>
          <div class="row" style="background-color:#E5E5E5">
          <div class="col-12 col-lg-4">
           <fieldset style="background-color:#E5E5E5;text-align:center">
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="max-width:230px; max-height: 170px;">
                            <? if(!empty($patient["Picture"])){ ?>    
                              <img src="<?=base_url().$patient["Picture"]?>" style="max-width:220px; max-height: 160px;">
                            <? } ?>
                            <i class='fa fa-user' style="font-size:150px; color:#39F"></i>
                        </div>
                    </div>

               
                </fieldset>
          </fieldset>
          
          <div class="row">
          	<?php echo view('tools/consent_menu'); ?>
          </div>
          <div class="row">
              <div class="col-md-12 mt-2 pt-2">
              <table width="100%" cellspacing="0" cellpadding="0">
              <tr>
                <td align="right" class=" pr-2  mt-2 pt-2"> <strong class="font-blue"><i class="fab fa-facebook-f"></i> Facebook : </strong>  </td>
                <td> <input class="mx-auto w-100" value="<?=$patient['id_facebook']?>"  disabled  type="text" placeholder="" /> </td>
              </tr>
              <tr>
                <td align="right" class=" pr-2  mt-2 pt-2"> <strong style="color:#090"> Wechat :</strong></td>
                <td><input  class="mx-auto w-100" value="<?=$patient['id_wechat']?>"  disabled type="text" placeholder="" /></td>
              </tr>
              <tr>
                <td align="right" class=" pr-2  mt-2 pt-2"><strong style="color:#45b6af"><i class="fab fa-line"></i> Line :</strong></td>
                <td><input class="mx-auto w-100"  value="<?=$patient['id_line']?>"  disabled type="text" placeholder="" /> </td>
              </tr>
            </table>     
            </div>
		  </div>
         
          </div><!-- Picture -->
          
          <!-- Data -->
        	
    <div class="row">
        <div class="col-md-12">
        	
            <h1 class="text-center">Registration </h1><br>
            <div class="table-responsive">
            <table class="table table-user-information justify-content-center" >
                <tbody>
                    <tr>
                      <td width="60" align="right"  ><strong> CN: </strong></td>
                      <td ><input  class="mx-auto text-center"  disabled  type="text" value="<?=$patient['HN']?>" placeholder="" /></td>
                      <td align="right" ><strong>Patient Type:</strong></td>
                      <td >
                      <input type="text" disabled value="<?=$patient['PatientType']?>" class="mx-auto w-100 text-center">
                      </td>
                    </tr>
                    <tr>
                      <td align="right"  ><strong>Date Regis: </strong></td>
                      <td colspan="3" ><input  class="mx-auto text-center" name="DateIn" disabled="disabled"  type="text" value="<?=$patient['DateIn'];?>" placeholder="" /></td>
                    </tr>
                    <tr>
                      <td align="right"  ><strong>VN: </strong></td>
                      <td colspan="3" ><input  class="mx-auto text-center" disabled name="vn" type="text" placeholder="" /></td>
                    </tr>
                    <tr>
                      <td align="right"   ><strong>Name EN:</strong></td>
                      <td colspan="3" > <input  class="mx-auto text-center"  disabled  type="text" value="<?=$patient['Pname_en']?>" size="5" placeholder="" />                  
                          <input class="mx-auto" value="<?=$patient['Fname_en']?>" disabled  name="Fname_en"   type="text" placeholder="" /> 
                           <input  class="mx-auto" type="text" disabled value="<?=$patient['Lname_en']?>"  name="Lname_en" placeholder="" /></td>
                    </tr>
                    <tr>
                      <td align="right"><strong>Name TH:</strong></td>
                      <td colspan="3" ><input  class="mx-auto text-center"  disabled  type="text" value="<?=$patient['Pname']?>" size="5" placeholder="" />  
                      <input class="mx-auto"  disabled  type="text" value="<?=$patient['Fname']?>"  placeholder="" />
                      <input  class="mx-auto"  disabled type="text" value="<?=$patient['Lname']?>"  placeholder="" /></td>
                    </tr>
                    <tr>
                      <td align="right"><strong>PID:</strong></td>
                      <td colspan="3" ><input  disabled class="mx-auto" type="text" placeholder=""  value="<?=$patient['PersonalID']?>"/> 
                      </td>
                    </tr>
                    <tr>
                      <td align="right"><strong>Passport:</strong></td>
                      <td colspan="3" ><input  class="mx-auto" disabled  type="text" value="<?=$patient['PassportNumber']?>"  placeholder="" />
                      
					</td>
                    </tr>
                    <tr>
                      <td align="right"><strong>Nationality:</strong></td>
                      <td colspan="3" >
                      <input disabled name="Nationality" <?=$patient['Nationality'] == 'Thai' || $patient['Nationality'] == '' ? 'checked':'';?> type="radio" id="radio" value="Thai" onchange="$('#Nationality_Oth').val(this.value)" /><span class="mx-2">Thai</span>
                      <input disabled name="Nationality" <?=$patient['Nationality'] == 'Chinese' ? 'checked':'';?> type="radio" id="radio" value="Chinese" onchange="$('#Nationality_Oth').val(this.value)"  /><span class="mx-2">Chinese</span>
                      <input disabled name="Nationality" onchange="$('#Nationality').css('display','')" <?=$patient['Nationality'] != 'Chinese' && $patient['Nationality'] != 'Thai' && $patient['Nationality'] != '' ? 'checked'.$nation_dis='':$nation_dis='none';?> id="Nationality_Oth" type="radio"  value="<?=$patient['Nationality']?>"  />
                       <span class="mx-2">Other</span>
             
                       <input  class="mx-auto text-center" type="text" disabled value="<?=$patient['Nationality']?>" style="width:200px;display:<?=$nation_dis?>"  placeholder="" />
                          
                        </td>
                    </tr>
                    <tr>
                      <td align="right"><strong>Race:</strong></td>
                      <td colspan="3" ><input disabled class="mx-auto" type="text" value="<?=$patient['Race']?>"  placeholder="" /></td>
                    </tr>
                    <tr>
                      <td align="right"><strong>D.O.B.:</strong></td>
                      <td colspan="3" ><input  class="mx-auto text-center"  disabled  type="text" value="<?=$patient['Bday']?>" size="5" placeholder="" /> 
                        
                          <? 
								$monthNum  = $patient['Mday'];
								$dateObj   = DateTime::createFromFormat('!m', $monthNum);
								$monthName = $dateObj->format('F');
						  ?>
						<input  class="mx-auto text-center"  disabled  type="text" value="<?=$monthName?>" size="15"  placeholder="" /> 
                        <input  class="mx-auto text-center"  disabled  type="text" value="<?=$patient['Yday']?>" size="5" placeholder="" />
                        <span class="mx-2"><strong>Age :</strong></span>  
                      <input  class="mx-auto text-center" disabled type="text" value="<?=$patient['Yday']<>'' ? (date('Y')-$patient['Yday']) : '';?>"  size="5" placeholder="" /></td>
                    </tr>
                    <tr>
                      <td align="right"><strong>Telephone:</strong></td>
                      <td colspan="3" ><input disabled  class="mx-auto" type="text" value="<?=$patient['Telephone']?>" placeholder="" /></td>
                    </tr>
                    <tr>
                      <td align="right"><strong>Email:</strong></td>
                      <td colspan="3" ><input  disabled  class="mx-auto" style="width:70%" type="text" value="<?=$patient['Email']?>" placeholder="" /></td>
                    </tr>
                    <tr>
                      <td align="right"><strong>Address:</strong></td>
                      <td colspan="3" ><input   disabled class="mx-auto" type="text" value="<?=$patient['Address']?>" placeholder="" /></td>
                    </tr>
                    <tr>
                      <td align="right"><strong>District:</strong></td>
                      <td width="144" >
                      <input  disabled size="15" value="<?=$patient['district']?>" type="text" placeholder="" /></td>
                      <td width="122" align="right" ><strong>Sub-district :</strong></td>
                      <td width="128" ><input  disabled value="<?=$patient['sub_district']?>" size="15" type="text" placeholder="" /></td>
                    </tr>
                    <tr>
                      <td align="right"><strong>Province:</strong></td>
                      <td ><input    disabled  size="15" type="text" value="<?=$patient['province']?>" placeholder="" /></td>
                      <td align="right" ><strong>Postal Code :</strong></td>
                      <td ><input  disabled value="<?=$patient['zipcode']?>" type="text" size="10" placeholder="" /></td>
                    </tr>
                    <tr>
                      <td align="right" valign="top"><strong>Note:</strong></td>
                      <td colspan="3" >
                      <textarea class="w-100 text-danger"  disabled rows="5"><?=$patient['Note']?></textarea></td>
                  </tr>
                    <tr>
                      <td align="right" valign="top"><strong>Underlying Disease:</strong></td>
                      <td colspan="3" ><textarea class="w-100 text-danger"  disabled rows="3"><?=$patient['underlying']?></textarea></td>
                    </tr>
                     <tr>
                      <td align="right" valign="top"><strong>Drug Allergy:</strong></td>
                      <td colspan="3" ><textarea class="w-100 text-danger"  disabled rows="3"><?=$patient['drug_allergy']?></textarea></td>
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