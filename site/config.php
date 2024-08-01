<?php
//MySql settings
$dbConn['host']='localhost';
$dbConn['user']='argininf1_jpebs';
$dbConn['pass']='';
$dbConn['dbas']='argininf1_jpebs';

$conn = mysqli_connect($dbConn['host'], $dbConn['user'], $dbConn['pass']);
mysqli_select_db($conn, $dbConn['dbas']);

mysqli_query($conn,"SET NAMES 'UTF8'");
mysqli_query($conn,"SET character_set_connection = 'UTF8'");
mysqli_query($conn,"SET character_set_client = 'UTF8'");
mysqli_query($conn,"SET character_set_results = 'UTF8'");

$sql=mysqli_query($conn,"SELECT * from jb_settings where id='1'");
while($sqlC=mysqli_fetch_array($sql)){
	$siteB['title']=$sqlC['title'];
	$siteB['description']=$sqlC['description'];
	$siteB['keywords']=$sqlC['keywords'];
	$siteB['language']=$sqlC['language'];
	$siteB['charset']=$sqlC['charset'];
	$siteB['webmaster']=$sqlC['webmaster'];
	$siteB['theme']=$sqlC['theme'];
	$siteB['contact-mail']=$sqlC['contact-mail'];	
}
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />