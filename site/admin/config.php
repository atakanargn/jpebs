<?php
//MySql settings
$dbConn['host']='localhost';
$dbConn['user']='root';
$dbConn['pass']='';
$dbConn['dbas']='jblog';

mysql_connect($dbConn['host'], $dbConn['user'], $dbConn['pass']);
mysql_select_db($dbConn['dbas']);
mysql_query("SET NAMES utf8");

$sql=mysql_query("SELECT * from jb_settings where id='1'");

while($sqlC=mysql_fetch_array($sql)){
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