<?php
	session_start();
	$_SESSION['kind'] = "도움";
	echo "<script>location.href='게시판.php'</script>";
?>