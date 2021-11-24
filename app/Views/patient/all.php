<link rel="stylesheet" type="text/css" href="<? echo base_url();?>/css/table_fixed.css">
<form class="" method="post" role="search">
<div class="row">
  <div class="col-md-3  navbar-form navbar-center" style="margin-left:15px"><a href="<?=base_url()?>/patient/profile">
  <button type="button" name="bt" id="bt"   value="Search" class="btn btn-xs blue" style="width:130px; height:30px">
  <i class="fa fa-users" ></i> <span class='tr1'>New Patient</span></button></a>   
  </div>
  <div class="col-md-9 ">
    <?php echo view('tools/search'); ?>
    </div>
</div>
<table class="table table-bordered table-striped">
<thead>
<tr>
<th >No.</th>
<th >Date Regis</th>
<th >CN</th>
<th >Name</th>
<th >PersornalID</th>
<th >Passport</th>
<th >Mobile</th>
<th >Physician</th>
<th >Patient type</th>
<th >Tools</th>
</tr>
</thead>
<tbody >
<? $no = $goto; ?>
<? foreach ($results as $row){ $link = base_url('patient/profile/'.$row['id_hn']); ?>
<tr>
<td class="text-center bg-light" ><a href="<?=$link?>"><?=$no++;?></a></td>
<td class="text-center bg-light"><a href="<?=$link?>"><?=date("d-m-Y", strtotime($row['DateIn']))?></a></td>
<td class="text-center bg-light"><a href="<?=$link?>"><?=$row['HN']?></a></td>
<td class="text-center bg-light"><a href="<?=$link?>"><?php echo getName($row['id_hn']); ?></a></td>
<td class="text-center bg-light"><a href="<?=$link?>"><?=$row['PersonalID']?></a></td>
<td class="text-center bg-light"><a href="<?=$link?>"><?=$row['PassportNumber']?></a></td>
<td class="text-center bg-light"><a href="<?=$link?>"><?=$row['Telephone']?></a></td>
<td class="text-center bg-light"><a href="<?=$link?>"><?=getDr($row['doctor']);?></a></td>
<td class="text-center bg-light"><a href="<?=$link?>"><?=$row['PatientType']?></a></td>
<td class="text-center bg-light">
<i class="fa fa-history modalbox"  style="font-size:18px; color:#3CC" title="Data History" data-link="data_history.php?id_hn=<?=$row_data['id_hn']?>"></i>
<i class="fa fa-calendar modalbox" style="font-size:18px; color:#3CC" title="Make Appointment" data-link="appoinment_v4.php?id_hn=<?=$row_data['id_hn'];?>&hidden_head=hidden_head"></i>
</td>
</tr>
<? } ?>
</tbody>
</table>
</form>