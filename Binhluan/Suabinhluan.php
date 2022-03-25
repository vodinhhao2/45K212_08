<?php
	ob_start();
	include("../connect.php");
	if(isset($_GET['binhluan']))
	{
		mysql_query("UPDATE binhluan SET id=);
	}
	header("location:cn_binhluan".$_GET['Binhluan']);
?>