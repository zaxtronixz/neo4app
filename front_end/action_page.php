<?php 

	$ciName = 		$_GET["name"];
	$ciSector = 	$_GET["sector"];
	$ciSubSector =  $_GET["sub_sector"];


	echo "<h2> The Infrastructure name is  $ciName </h2> "."</br>";
	echo "<h2> The Infrastructure Sector is  $ciSector </h2> "."</br>";
	echo "<h2> The Infrastructure Sub Sector is  $ciSubSector </h2> "."</br>";


	include ("../ciBuilder.php");

	echo "Asset created successfully";
 ?>