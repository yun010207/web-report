<?php 
	include 'mysql.php';
	$id = $_SESSION['username'];
	$kind = $_POST['kind'];

	$sql = "select * from recommend where kind = '$kind' and id = '$id' and number = ";

	if ($kind == 'board') {
		$num = $_SESSION['boardnum'];
		$sql .= "'$num'";

		$result = mysqli_query($connect, $sql);
		$recrow = mysqli_num_rows($result);
		if ($recrow >= 1) {
			echo "<script>alert('추천은 한 번만 가능합니다.');</script>";
		}
		else {
			$sql = "update board set recommend = recommend + 1 where kind = '$kind' number = '$num'";
			$result = mysqli_query($connect, $sql);
			$sql = "insert into recommend values('$id', '$kind', '$num')";
			$result = mysqli_query($connect, $sql);
		}
	}
	else if ($kind == 'comment') {
		
		$cr_num = $_POST['cr_num'];
		$sql .= "'$cr_num'";
		$result = mysqli_query($connect, $sql) or die("mysql쿼리 에러");
		$recrow = mysqli_num_rows($result);
		if ($recrow >= 1) {
			echo "<script>alert('추천은 한 번만 가능합니다.');</script>";
		}
		else {

			$sql = "update comment set recommend = recommend + 1 where kind = '$kind' and number = '$cr_num'";
			$result = mysqli_query($connect, $sql);
			$sql = "insert into recommend values('$id', '$kind', '$cr_num')";
			$result = mysqli_query($connect, $sql);
		}
	}
	else if ($kind == 'reply') {

	}

	echo "<script>location.href='보드.php'</script>";
?>