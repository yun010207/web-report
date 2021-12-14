<?php
	session_start();
	$_SESSION['kind'] = "팀플";
	echo "<script>location.href='게시판.php'</script>";
?>