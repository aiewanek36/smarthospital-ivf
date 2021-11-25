<style>

.author {
  text-transform: uppercase;
  text-align: center;
  margin-top: 30px;
}
.author span {
  display: block;
  text-transform: none;
}
.author .sociales {
  list-style: none;
  display: flex;
  justify-content: center;
  margin-top: 20px;
}
.author .sociales li {
  margin: 5px;
}
.author .sociales li a {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 30px;
  height: 30px;
  text-decoration: none;
  background: red;
  border-radius: 50%;
  box-shadow: 0 0 4px rgba(255, 255, 255, 0.5);
}
.author .sociales li a.twitter {
  background: #1da1f2;
}
.author .sociales li a.instagram {
  background: #c32aa3;
}
.author .sociales li a.github {
  background: #282d32;
}
.author .sociales li a.codepen {
  background: #14171a;
}

.tabs {
  width: 100%;
  text-align:center;

}
/* @media screen and (max-width: 960px) {
  .tabs {
    display: grid;
    grid-template-columns: 60px 1fr;
  }
} */
@media screen and (min-width: 960px) {
  .tabs {
    width: 100%;
  }
}
.tabs__head {
  width: 100%;
  background: rgba(255, 255, 255, 0.94);
  display: flex;
  justify-content:center;
  align-items: center;
  list-style: none;
  overflow-x: auto;
}
/* @media screen and (max-width: 960px) {
  .tabs__head {
    flex-direction: column;
    overflow: hidden;
  }
} */
@media screen and (min-width: 960px) {
  .tabs__head {
    background: none;
	
  }
}
.author span {
    display: block;
    text-transform: none;
    font-size: 3rem;
}

@media screen and (max-width: 960px) {
  
	.author span {
		display: block;
		text-transform: none;
		font-size: 4rem;
	}

	.tabs__head li a {
	display: flex;
	flex-direction: column;
	justify-content: center;
	text-align: center;
	width: 100%;
	height: 60px;
	text-decoration: none;
	font-size: 0em;
	font-weight: 600;
	color: rgba(0, 0, 0, 0.3);
	transition: 0.4s all;
	position: relative;
	}
}
@media screen and (min-width: 960px) {
  .tabs__head li a {
    background: rgb(212 205 205 / 94%);
    flex-direction: row;
    align-items: center;
    width: 100%;
    padding-left:15px;
    padding-right:15px;
    border:1px solid #927474;
  }

	.author span {
		display: block;
		text-transform: none;
		font-size: 2rem;
	}
}


.tabs__head li a {
  display: flex;
  flex-direction: column;
  justify-content: center;
  text-align: center;
  width: 100%;
  height: 60px;
  text-decoration: none;
  font-weight: 600;
  color: rgba(0, 0, 0, 0.3);
  transition: 0.4s all;
  position: relative;
}
.tabs__head li a:hover {
  background: rgba(255, 255, 255, 0.9);
  color: #000;
}
.tabs__head li a:hover span {
  color: rgba(0, 0, 0, 0.3);
}
.tabs__head li a.active-link {
  box-shadow: 0 2px #f05451 inset;
  color: #000;
  background: #fff;
  z-index: 10;
}
.tabs__head li a.active-link span {
  color: #f05451;
}
/* @media screen and (max-width: 960px) {
  .tabs__head li a.active-link {
    box-shadow: 2px 0 #f05451 inset;
  } */
}
.tabs__head li a span {
  margin-bottom: 2px;
  font-size: 1.2em;
  pointer-events: none;
}
@media screen and (min-width: 960px) {
  .tabs__head li a span {
    position: relative;
    left: -5px;
  }
}
.tabs__content {
  position: relative;
  transition: transform 0.4s;
  height: 300px;
  overflow: hidden;
  box-shadow: 0 0 6px rgba(0, 0, 0, 0.2);
}
/* @media screen and (max-width: 960px) {
  .tabs__content {
    height: 100%;
  }
}
.tabs__content__item {
  background: #fff;
  position: absolute;
  transition: 0.5s all;
  opacity: 0;
  transition: 0.3s all;
  height: 100%;
  overflow-y: auto;
  z-index: 1;
}*/
@media screen and (max-width: 960px) {
  .tabs__content__item {
    height: 100%;
  }
} 
.tabs__content__item .content {
  padding: 0.9em 3em 3em 3em;
  font-size: 0.9em;
}
.tabs__content__item .content p {
  margin-top: 20px;
  font-size: 0.95em;
  color: #182c61;
  line-height: 25px;
}
.tabs__content__item.active-tab {
  z-index: 5;
  opacity: 1;
}
</style>

<?php

$id_hn = $results['id_hn'];
//print_r($results);
$router = \Config\Services::router();
$page = $router->methodName();
$id_act = $patient['id_act'];
$Normaltab = 'class=""';
$CurrentActive2 = 'class="active-link"';
if($page=="profile"){$RegChk = $CurrentActive2;}else{$RegChk = $Normaltab;}
if($page=="opd_room.php"){$NurNoChk = $CurrentActive2;}else{$NurNoChk = $Normaltab;}
if($page=="dx_room.php"){$DxChk = $CurrentActive2;}else{$DxChk = $Normaltab;}
if($page=="order_tab.php"||$page=="order_tab_his.php"){$OrderChk = $CurrentActive2;}else{$OrderChk = $Normaltab;}
if($page=="lab_order_rou.php"){$LabChk = $CurrentActive2;}else{$LabChk = $Normaltab;}
if($page=="service_tab.php"||$page=="service_tab_action.php"||$page=="service_tab_his.php"){$ServiceChk = $CurrentActive2;}else{$ServiceChk = $Normaltab;}
if($page=="pharmacy.php"){$RxChk = $CurrentActive2;}else{$RxChk = $Normaltab;}
if($page=="payment_tab.php"){$PayChk = $CurrentActive2;}else{$PayChk = $Normaltab;}
if($page=="drawing_tab.php"){$DrawingChk = $CurrentActive2;}else{$DrawingChk = $Normaltab;}
if($page=="pharmacy.php"){$PhamaChk = $CurrentActive2;}else{$PhamaChk = $Normaltab;}
if($page=="data_history.php"){$HistoryChk = $CurrentActive2;}else{$HistoryChk = $Normaltab;}
if($page=="phy_room.php"){$Physio = $CurrentActive2;}else{$Physio = $Normaltab;}
if($page=="appointment_manage.php"){$MakeApp = $CurrentActive2;}else{$MakeApp = $Normaltab;}

$Reg = '<li ><a '.$RegChk.' href="'.site_url('patient/profile/'.$id_hn).'"><span class="fa fa-user"></span> Registration</a></li>';
$NurNo = '<li ><a '.$NurNoChk.' href="?menu=opd_room.php&id_hn='.$id_hn.'&id_act='.$id_act.'"><span class="fa fa-pencil-square-o"></span>Nurse Note</a></li>';
$Dx = '<li ><a '.$DxChk.' href="?menu=dx_room.php&id_hn='.$id_hn.'&id_act='.$id_act.'"><span class="fa fa-user-md"></span>Doctor Room</a></li>';
$Physio = '<li ><a '.$Physio.' href="?menu=phy_room.php&id_hn='.$id_hn.'&id_act='.$id_act.'">Physio</a></li>';
$Order = '<li ><a '.$OrderChk.' href="?menu=order_tab.php&id_hn='.$id_hn.'&id_act='.$id_act.'">Order PCT</a></li>';
$Lab = '<li ><a '.$LabChk.' href="?menu=lab_order_rou.php&id_hn='.$id_hn.'&id_act='.$id_act.'">Laboratory</a></li>';
$Rx = '<li ><a '.$RxChk.' href="?menu=pharmacy.php&id_hn='.$id_hn.'&id_act='.$id_act.'"><span class="fa fa-medkit"></span>Pharmacy</a></li>';
$Pay = '<li ><a '.$PayChk.' href="?menu=payment_tab.php&id_hn='.$id_hn.'&id_act='.$id_act.'"><span class="fa fa-calculator"></span>Payment</a></li>';
$Service = '<li ><a '.$ServiceChk.' href="?menu=service_tab.php&id_hn='.$id_hn.'&id_act='.$id_act.'">Service PCT</a></li>';
$History = '<li ><a '.$HistoryChk.' href="?menu=data_history.php&id_hn='.$id_hn.'&id_act='.$id_act.'"><span class="fa fa-history"></span>Data History</a></li>';
$Drawing = '<li ><a '.$DrawingChk.' href="?menu=drawing_tab.php&id_hn='.$id_hn.'&id_act='.$id_act.'">Drawing</a></li>';
$Pharma = '<li ><a '.$PhamaChk.' href="?menu=pharmacy.php&id_hn='.$id_hn.'&id_act='.$id_act.'">Phamacy</a></li>';
$Make_App = '<li ><a '.$MakeApp.' href="?menu=appointment_manage.php&id_hn='.$id_hn.'&id_act='.$id_act.'"><span class="fa fa-calendar"></span>Make Appointment</a></li>';

?>

<div class="author">
<div class="tabs" id="tabs">
  <ul class="tabs__head">
    <?php
					echo $Reg;
					echo $NurNo;
					echo $Dx;
					// echo $Physio;
					// echo $Order;
					// echo $Lab;
					// echo $Service;
					echo $History;
					// $Drawing;
					echo $Rx;
					echo $Pay;
					echo $Make_App;
				
    ?>
                    </ul>
                </div>
        
	</div>
