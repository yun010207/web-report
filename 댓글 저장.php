<?php
	include 'mysql.php';
	$comment = $_POST['content'];
	if ($comment == '') {
		echo "<script>alert('내용을 입력하세요.');</script>";
	}
	else {
	$num = $_SESSION['boardnum'];


	$sql = "select * from comment";
	$result = mysqli_query($connect, $sql);
	$cnum = mysqli_num_rows($result);

	$id = $_SESSION['username'];
	$result = mysqli_query($connect, $sql);


	$sql = "select * from comment";

	$date = date('Y-m-d H:i:s');
	$sql = "insert into comment values('$date', '$comment', '$num', 0, '$cnum', '$id')";
	$result = mysqli_query($connect, $sql);

	$sql = "update board set comment = comment + 1";
	$result = mysqli_query($connect, $sql);
	}

	echo "<script>location.href='보드.php'</script>";
?>