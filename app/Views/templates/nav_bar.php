<?
$menu = current_url(true)->getSegment(1);
$menu2 = current_url(true)->getSegment(2);

if($menu == "active"){ $Active_chk  = 'id="current"';}
if($menu == "all_patient"){ $AllPatient_chk  = 'id="current"';}
if($menu == "or_room"){ $OR_chk  = 'id="current"';}
if($menu == "finance"){ $Fin_chk  = 'id="current"';}
if($menu == "appointment" && $menu2 == 'List'){ $appList_chk  = 'id="current"';}
if($menu == "appointment" && $menu2 == 'Make'){ $appMake_chk  = 'id="current"';}


$activePatient = '<li '.$Active_chk.'><a href="'.base_url().'/patient/view/active" ><span class="micro14">Active Patient</span></a></li>';
$allPatient = '<li '.$AllPatient_chk.'><a href="'.base_url().'/patient/view/all" ><span class="micro14">All Patient</span></a></li>';
$OR_ROOM = '<li '.$OR_chk.'><a href="/or_room" ><span class="micro14">OR Room</span></a></li>';
$Fin = '<li '.$Fin_chk.'><a href="/finance" ><span class="micro14">Patient FIN</span></a></li>';
$AppointList = '<li '.$appList_chk.'><a href="/appointment/List"><span class="micro14">Appointment List</span></a></li>';
$AppointMake = '<li '.$appMake_chk.'><a href="/appointment/Make" ><span class="micro14">Make Appointment</span></a></li>';
$Booking = '<li '.$Bookapp_chk.'><a href="'.$head.'outline.php?menu=appointment_v2.php" ><span class="micro14">Booking Room</span></a></li>';
$Inventory = '<li '.$Inv_chk.'><a href="'.$head.'outline.php?menu=inventorys.php" ><span class="micro14">Inventory</span></a></li>';
$Report = '<li '.$Report_chk.'><a href="'.$head.'outline.php?menu=report.php"><span class="micro14">Report</span></a></li>';
$Rx = '<li '.$Rx_chk.'><a href="'.$head.'outline.php?menu=rx_list.php" ><span class="micro14">Patient Rx</span></a></li>';
$OPD = '<li '.$OPD_chk.'><a href="'.$head.'outline.php?menu=all_risk_opd.php" ><span class="micro14">Patient OPD</span></a></li>';
$LAB = '<li '.$Lab_chk.'><a href="'.$head_lab.'outline.php?menu=lab_rou_risk_insys.php" ><span class="micro14">Routine LAB</span></a></li>';
$LAB_ART = '<li '.$LABART_chk.'><a href="'.$head_lab.'outline.php?menu=lab_risk_insys.php" ><span class="micro14">Active Lab</span></a></li>';
$MKT = '<li '.$mkt_chk.'><a href="'.$head.'outline.php?menu=mkt.php" ><span class="micro14">HEAD</span></a></li>';
$DX = '<li '.$dx_chk.'><a href="'.$head.'outline.php?menu=all_risk_que.php" ><span class="micro14">Patient DX</span></a></li>';
$PreRegis = '<li '.$pre_chk.'><a href="'.$head.'outline.php?menu=pre_registration.php" ><span class="micro14">Pre-Regis</span></a></li>';
$CRM = '<li '.$crm_chk.'><a href="'.$head.'outline.php?menu=sms_set.php" ><span class="micro14">MKT&CRM</span></a></li>';
$Medical_Guild = '<li '.$guild_chk.'><a href="'.$head.'outline.php?menu=setting_logo_show.php" ><span class="micro14">Medical Guild</span></a></li>';
$Setting = '<li '.$Setting_chk.'><a href="'.$head.'admin_index.php?menu=setting_logo.php&menu2=setting" ><span class="micro14">Setting</span></a></li>';


$Sperm = '<li '.$Sperm_chk.'><a href="'.$head_sperm.'/outline.php?menu=patient_sperm.php"><span class="micro14">Sperm Bank</span></a></li>';
$Oocyte = '<li '.$Oocyte_chk.'><a href="'.$head_oocyte.'/outline.php?menu=patient_oocyte.php"><span class="micro14">Oocyte Bank</span></a></li>';
$Embryo = '<li '.$Embryo_chk.'><a href="'.$head_embryo.'/outline.php?menu=patient_embryo.php"><span class="micro14">Embryo Bank</span></a></li>';


$ICMART = '<li '.$icmart_chk.'><a href="'.$head_icmart.'/outline.php?menu=icmart.php&menu2=ktp13.php"><span class="micro14">ICMART</span></a></li>';

?>
<style>
#tabsD {
    float:left;
    width:100%;
    background:#FFFFFF;
    font-size:93%;
    line-height:normal;
        border-bottom:1px solid #5F9199;
}
#tabsD ul {
    margin:0;
    padding:10px 10px 0 50px;
    list-style:none;
}
#tabsD li {
    display:inline;
    margin:0;
    padding:0;
}
#tabsD a {
    float:left;
    background:url("<?php echo base_url("assets/background/".$theme['tab_left']['file'])?>") no-repeat left top;
    margin:0;
    padding:0 0 0 4px;
    text-decoration:none;
}
#tabsD a span {
    float:left;
    display:block;
    background:url("<?php echo base_url("assets/background/".$theme['tab_right']['file'])?>") no-repeat right top;
    padding:5px 15px 4px 6px;
    color:#000000;
}
#tabsD a span {float:none;}
#tabsD a:hover span {
    color:#FFFFFF;
}
#tabsD a:hover {
    background-position:0% -42px;
}
#tabsD a:hover span {
    background-position:100% -42px;
}

#tabsD #current a {
        background-position:0% -42px;
}
#tabsD #current a span {
        background-position:100% -42px;
}
</style>
<div class="row"><div class="col-12 block">
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="left" valign="top"> 
    <div id="tabsD">
    <ul>

<? $link="../" ;
  switch($_SESSION['type_user']){
    case 'admin' :
      echo $activePatient;
      echo $allPatient;
      echo $OR_ROOM;
      echo $Fin;
      echo $LAB;
      echo $LAB_ART;
      echo $AppointList;
      echo $AppointMake;
      echo $Booking;
      echo $Inventory;
      echo $Report;
      echo $Sperm;
      echo $Oocyte;
      echo $Embryo;
      break;
    case 'reg' :
      echo $activePatient;
      echo $allPatient;
      echo $AppointList;
      echo $AppointMake;
      echo $Booking;
      echo $Report;
      break;
    case 'fin' :
       $Fin;
       $Rx;
      echo $OR_ROOM;
      echo $activePatient;
      echo $allPatient;
      echo $AppointList;
      echo $AppointMake;
      echo $Booking;
       $Inventory;
      echo $Report;
      echo $Sperm;
      echo $Oocyte;
      echo $Embryo;
      break;
    case 'opd' :
      echo $OPD;
       $Rx;
      echo $OR_ROOM;
       $LAB;
      echo $activePatient;
      echo $allPatient;
      echo $AppointList;
      echo $AppointMake;
      echo $Booking;
       $Inventory;
      echo $Report;
      echo $Sperm;
      echo $Oocyte;
      echo $Embryo;
      break;
    case 'dx' :
      echo $DX;
      echo $OR_ROOM;
       $LAB;
      echo $activePatient;
      echo $allPatient;
      echo $AppointList;
      echo $AppointMake;
      echo $Booking;
      break;
    case 'lab' :
      echo $LAB_ART;
      echo $OR_ROOM;
       $LAB;
      echo $Sperm;
      echo $Oocyte;
      echo $Embryo;
      echo $activePatient;
      echo $allPatient;
      echo $AppointList;
      echo $AppointMake;
      echo $Booking;
       $Inventory;
      echo $Report;
      echo $ICMART;
      break;
    case 'rx' :
       $Rx;
      echo $activePatient;
      echo $allPatient;
      echo $AppointList;
      echo $AppointMake;
       $Inventory;
      echo $Report;
      break;
    case 'inv' :
       $Inventory;
      echo $Report;
      break;
    case 'mkt' :
    case 'manager_mkt' :
      echo $MKT;
      echo $Report;
      echo $CRM;
      break;
  }
?>
</ul>
</div>

</td>
    <td><div id="tabsD">
    <ul>
  <? switch($_SESSION['type_user']){
          case 'admin' :
          case 'opd' :
            echo $PreRegis;
            echo $CRM;
            break;
          case 'reg' :
            $Setting = '';
            break;
    }
            echo $Setting;
            echo $Medical_Guild;  // Everyone
  ?>

  
<li class="micro14" <? if($_GET['menu']== "edit_user.php"){ ?> id="current" <? } ?>><a href="#" onClick='window.location.replace("<?=$head?>outline.php?menu=edit_user.php");'><span class="micro14">User Profile</span></a></li>
<li class="micro14"><a href="/logout"><span class="micro14 btn-danger" >Log Out</span></a></li>
    </ul>
</div></td>
  </tr>
</table>
</div></div>