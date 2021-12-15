<?php
	include 'mysql.php';
	$comment = $_POST['content'];
	if ($comment == '') {
		echo "<script>alert('내용을 입력하세요.');</script>";
	}
	else {
		$_SESSION['rpindex'] = -1;
		$num = $_POST['rpnum'];


		$sql = "select * from reply";
		$result = mysqli_query($connect, $sql);
		$cnum = mysqli_num_rows($result);

		$id = $_SESSION['username'];
		$result = mysqli_query($connect, $sql);


		$sql = "select * from reply";

		$date = date('Y-m-d H:i:s');
		$sql = "insert into reply values('$date', '$comment', '$num', 0, '$cnum', '$id')";
		$result = mysqli_query($connect, $sql);


		echo "<script>location.href='보드.php'</script>";
	}
?>