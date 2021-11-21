<?php
	include("include/config.inc.php");

	$strSQL = "SELECT * FROM tb_user WHERE SID = '".trim($_GET['sid'])."' AND id = '".trim($_GET['uid'])."' ";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
	if(!$objResult)
	{
			echo "Activate Invalid !";
	}
	else
	{	
			$strSQL = "UPDATE tb_user SET active = 'Yes'  WHERE SID = '".trim($_GET['sid'])."' AND id = '".trim($_GET['uid'])."' ";
			$objQuery = mysql_query($strSQL);

		echo "Activate Successfully !";
	}

	
?>