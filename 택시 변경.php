<?php
	session_start();
	$_SESSION['kind'] = "택시";
	echo "<script>location.href='게시판.php'</script>";
?>