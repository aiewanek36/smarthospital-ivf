<link rel="stylesheet" type="text/css" href="<?php echo base_url('plugins/jquery.Thailand.js/dist/jquery.Thailand.min.css');?>">

<style>
@media (max-width: 576px) {
    html { font-size: 0.7rem; }
    th { font-size: 1rem; }
}
@media (min-width: 768px) {
    html { font-size: 0.8rem; }
    th { font-size: 1rem; }

}
@media (min-width: 992px) {
    html { font-size: 0.8rem; }
    th { font-size: 1rem; }
    strong { font-size: 1rem; }
    .table-user-information td { font-size: 1rem; }
    .btn { font-size: 0.7rem; }
    input[type="text"],select { font-size: 0.9rem; }
}
/* @media (min-width: 1200px) {
    
} */
	
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
<? 
$patient = $patient[0]; 
$data['results'] = ['id_hn'=>$patient['id_hn'],'id_act'=>$patient['id_act']]; ?>
<?php echo $patient['id_hn'] <> '' ? view('tools/menubar',$data) : ''; ?>

<form  id="add-form" onsubmit="return Check_Img();"  method="post" action="<?=site_url('patient/add');?>"> 

<input type="hidden" name="id_hn" id="id_hn" value="<?=$patient['id_hn']?>"  />
<input type="hidden" name="spouse" id="spouse" value="<?=$patient['spouse']?>"  />

	<!-- Female Data -->
    <div style="background-color:#e26a6a" class="col-12 col-md-12  <?=$patient['spouse']<>'' ? 'col-lg-6' : 'col-lg-12'?>">
        <div class="portlet box red">
              <div class="portlet-title">
                <div class="caption">
            			<i class="fa fa-lg fa-user"></i> <span class="tr2"><strong>Patient</strong></span>
            	</div>
              </div>
        </div>
          <div class="row bg-light">
         
          <!-- Data -->
    <div class="col-12 col-lg-12">
    <div class="row">
        <div class="col-md-12 nopadding">
            <div class="table-responsive">
            <table class="table table-user-information justify-content-center" >
                <tbody>
                    <tr>
                      <td width="60" align="right"  ><strong>Time :</strong></td>
                      <td colspan="2" ><input  class="mx-auto w-50 text-center" name=""   type="text" value="<?=$patient['']?>" placeholder="" /></td>
                      <td width="88" align="right" >&nbsp;</td>
                      <td colspan="2" >&nbsp;</td>
                    </tr>
                    <tr>
                      <td align="right" class="text-nowrap" ><strong>Height :</strong></td>
                      <td width="40%" ><input  class="mx-auto w-100 text-center" name="input"   type="text" value="<?=$patient['']?>" placeholder="" /></td>
                      <td width="50" >cm.</td>
                      <td align="right" ><strong>Weight :</strong></td>
                      <td width="40%" ><input  class="mx-auto w-100 text-center" name="input2"   type="text" value="<?=$patient['']?>" placeholder="" /></td>
                      <td width="50" >kg.</td>
                    </tr>
                    <tr>
                      <td align="right"  ><strong>BP :</strong></td>
                      <td class="text-nowrap" >
						  <div class="row ">
						  <div class="col-md-6  mx-auto ">
						  <input  class="mx-auto w-100 text-center"  name="input3"   type="text" value="<?=$patient['']?>" placeholder="" /></div>
						  <div class="col-md-6  mx-auto">
                        <input  class="mx-auto w-100 text-center" name="input4"   type="text" value="<?=$patient['']?>" placeholder="" />
						  </div>
							  </div></td>
                      <td class="text-nowrap" >mm Hg. </td>
                      <td align="right" ><strong>PR :</strong></td>
                      <td ><input  class="mx-auto w-100 text-center" name="input9"   type="text" value="<?=$patient['']?>" placeholder="" /></td>
                      <td >bpm</td>
                    </tr>
                    <tr>
                      <td align="right"  ><strong>RR :</strong></td>
                      <td class="text-nowrap" ><input  class="mx-auto w-100 text-center" name="input5"   type="text" value="<?=$patient['']?>" placeholder="" /></td>
                      <td class="text-nowrap" >/ min</td>
                      <td align="right" ><strong>Temp :</strong></td>
                      <td ><input  class="mx-auto w-100 text-center" name="input8"   type="text" value="<?=$patient['']?>" placeholder="" /></td>
                      <td >°C</td>
                    </tr>
                    <tr>
                      <td align="right"  ><strong>BMI :</strong></td>
                      <td class="text-nowrap" ><input  class="mx-auto w-100 text-center" name="input6"   type="text" value="<?=$patient['']?>" placeholder="" /></td>
                      <td class="text-nowrap" >&nbsp;</td>
                      <td align="right" ><strong>Result :</strong></td>
                      <td ><input  class="mx-auto w-100 text-center" name="input7"   type="text" value="<?=$patient['']?>" placeholder="" /></td>
                      <td >&nbsp;</td>
                    </tr>
                    <tr>
                      <td align="right" valign="top" class="text-nowrap" ><strong>Drug Allergy :</strong></td>
                      <td colspan="4" class="text-nowrap" >
                      <textarea name="textarea" rows="3" class="w-100" id="textarea"></textarea></td>
                      <td >&nbsp;</td>
                    </tr>
                    <tr>
                      <td align="right" valign="top" class="text-nowrap" ><strong>Underlying Disease : 
                      </strong></td>
                      <td colspan="4" class="text-nowrap" ><textarea name="textarea2" rows="3" class="w-100" id="textarea2"></textarea></td>
                      <td >&nbsp;</td>
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
