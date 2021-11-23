<link rel="stylesheet" type="text/css" href="<? echo base_url();?>/css/table_fixed.css">
<div class="row">
  <div class="col-md-3  navbar-form navbar-center" style="margin-left:15px">
  </div>
  <div class="col-md-9 ">
    <?php echo view('tools/search'); ?>
    </div>
</div>
<table class="table table-bordered table-striped">
<thead>
<tr>
<th >No.</th>
<th >Date</th>
<th >VN</th>
<th >CN</th>
<th >Name</th>
<th >Operation</th>
<th >Physician</th>
<th >Patient type</th>
<th >Status</th>
</tr>
</thead>
<tbody >
<? $no = $goto; ?>
<? foreach ($results as $row){ $link = base_url('patient/profile/'.$row['id_hn']); ?>
<tr>
<td class="text-center bg-light" ><a href="<?=$link?>"><?=$no++;?></a></td>
<td class="text-center bg-light"><a href="<?=$link?>"><?=date("d-m-Y", strtotime($row['vn_date_start']))?></a></td>
<td class="text-center bg-light"><a href="<?=$link?>"><?=$row['vn_per_day']?></a></td>
<td class="text-center bg-light"><a href="<?=$link?>"><?=$row['HN']?></a></td>
<td class="text-center bg-light"><a href="<?=$link?>"><?php echo getName($row['id_hn']); ?></a></td>
<td class="text-center bg-light"><a href="<?=$link?>"><?=$row['detail']?></a></td>
<td class="text-center bg-light"><a href="<?=$link?>"><?=getDr($row['id_doctor']);?></a></td>
<td class="text-center bg-light"><a href="<?=$link?>"><?=$row['PatientType']?></a></td>
<td class="text-center bg-light"><a href="<?=$link?>"><?=$row['status_room']?></a></td>
</tr>
<? } ?>
</tbody>
</table>