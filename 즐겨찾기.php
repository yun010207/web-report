<?php 
	include 'mysql.php';
	$id = $_SESSION['username'];
	$num = $_POST['num'];

	$sql = "select * from bookmark where boardnum = '$num' and id = '$id'";
	$result = mysqli_query($connect, $sql);
	$isbmk = mysqli_num_rows($result);
	if ($isbmk) {
		echo "<script>alert('즐겨찾기에서 해제되었습니다.');</script>";
		$sql = "delete from bookmark where boardnum = '$num' and id = '$id'";
		$result = mysqli_query($connect, $sql);
	}
	else {
		echo "<script>alert('즐겨찾기에 등록되었습니다.');</script>";
		$sql = "insert into bookmark values('$id', '$num')";
		$result = mysqli_query($connect, $sql);
	}


	echo "<script>location.href='보드.php'</script>";
?>