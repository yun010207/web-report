<?php
	$host = "localhost";
	$user = "root";

    session_start();
	$connect = mysqli_connect($host, $user) or die("mysql서버 접속 에러");
	mysqli_select_db($connect, "web_rpt") or die("DB 접근 에러");

?>