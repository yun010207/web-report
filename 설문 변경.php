<?php
	session_start();
	$_SESSION['kind'] = "설문";
	echo "<script>location.href='게시판.php'</script>";
?>