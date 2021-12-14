<?php 

	include '고정 화면.php';
	$title = $_POST['title'];
	$content = $_POST['content'];

	if ($title == null) {
		echo "<script>alert('제목을 입력하십시오');</script>";
		echo "<script>location.href='글쓰기.php'</script>";
	}
	else if ($content == null) {
		echo "<script>alert('내용을 입력하십시오');</script>";
		echo "<script>location.href='글쓰기.php'</script>";
	}
	else {
		$kind = $_SESSION['kind'];
		$id = $_SESSION['username'];

		$sql = "select * from board";
		$result = mysqli_query($connect, $sql);
		$num = mysqli_num_rows($result);
		$date = date('Y-m-d H:i:s');
		$sql = "insert into board values('$kind', '$id', '$title', '$content', '$date', 0, 0, 0, '$num')";

		$result = mysqli_query($connect, $sql);
		echo "<script>location.href='게시판.php'</script>";
	}

?>