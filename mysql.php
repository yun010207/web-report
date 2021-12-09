<?php 
	$host = "localhost";
	$user = "root";

	$connect = mysqli_connect($host, $user) or die("mysql서버 접속 에러");
	mysqli_select_db($connect, "web_rpt") or die("DB 접근 에러");

	$sql = "select * from member_tbl";

	$result = mysqli_query($connect, $sql);
?>