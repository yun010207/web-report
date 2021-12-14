<?php
	session_start();
	$_SESSION['kind'] = "학과";
	echo "<script>location.href='게시판.php'</script>";
?>