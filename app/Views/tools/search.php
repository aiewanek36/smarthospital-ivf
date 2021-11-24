<?php
$search_date = $_REQUEST['search_date'];
$d1 = $_REQUEST['d1'];
$d2 = $_REQUEST['d2'];
$s_text = $_REQUEST['s_text'];
?>
<div class="row">
<div class="form-group col-md-12 navbar-form navbar-left" style="margin-left:15px">
  <label>Search : </label>
 <select name="search_date"  class="form-select form-select-lg mb-3" aria-label=".form-select-lg" >
  <option selected value="">All</option>
  <option value="Date" <?=$search_date == 'Date' ? 'selected':''?>>Date</option>
</select>
	From :
    <input style="width:100px;" class="datepicker text-center" type="text" data-provide="datepicker" name="d1" value="<?=$d1<>''? $d1:date('Y-m-d')?>" data-date-language="th-th">
    To :
    <input style="width:100px;" class="datepicker text-center" type="text" data-provide="datepicker" name="d2" value="<?=$d2<>''? $d2:date('Y-m-d')?>" data-date-language="th-th">
	Detail :
    <input style="width:300px;" type="text" placeholder="Please Input Text to Search......" name="s_text" value="<?=$s_text?>">
      <button type="submit" class="btn btn-xs yellow btn-default"><i class="fa fa-search" ></i> <span class='tr1'>Search</span></button>
  </div>

</div>
</div>	

