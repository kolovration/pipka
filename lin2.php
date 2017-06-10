<?php

$link = mysql_connect("p291552.mysql.ihc.ru", "p291552_soft", "****");
mysql_select_db("p291552_soft", $link);
$cdkey = $_GET["cdkey"];
$idsoft = $_GET["idsoft"];
$result = mysql_query("SELECT *  FROM `licens2` WHERE `cdkey` = '$cdkey'", $link);
$num_rows = mysql_num_rows($result);
$data=mysql_fetch_assoc($result);

if ($num_rows == 1){
	if ($data['idsoft'] == Null){ 
		echo "200";
		$sql = mysql_query("UPDATE `licens2` SET `idsoft` = ('".$_GET['idsoft']."') WHERE cdkey = '$cdkey'");
                        
	} else {
		if ($_GET["idsoft"] == $data['idsoft']) {
			echo "200";
		} else {

			echo "503";
		}
	}



	
} else {
	echo "404";	
}




?>