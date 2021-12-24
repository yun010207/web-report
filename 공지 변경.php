<?php
	session_start();
	$_SESSION['kind'] = "공지";
	echo "<script>location.href='게시판.php'</script>";
?>