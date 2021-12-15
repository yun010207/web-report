<?php
	include 'mysql.php';

	$rpindex = $_POST['rpindex'];

	$_SESSION['rpindex'] = $rpindex;
	echo "<script>location.href='보드.php'</script>";
?>