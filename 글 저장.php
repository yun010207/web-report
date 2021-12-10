<?php 
	include '로그인 상태.php';
	include '고정 화면.php';
	$title = $_POST['title'];
	$content = $_POST['content'];
	//도움 1 팀플2 택시3 설문4


	if ($title == null) {
		echo "<script>alert('제목을 입력하십시오');</script>";
		echo "<script>location.href='글쓰기.php'</script>";
	}
	else if ($content == null) {
		echo "<script>alert('내용을 입력하십시오');</script>";
		echo "<script>location.href='글쓰기.php'</script>";
	}
	else {
		$kind = "도움";

		$sql = "select * from board";
		$result = mysqli_query($connect, $sql);
		$num = mysqli_num_rows($result);

		$sql = "insert into board (kind, writer, title, content, view, recommand, comment, number) values('$kind', '$_SESSION['userid'], '$title', '$content', 0, 0, 0, '$num')";

		$result = mysqli_query($connect, $sql);
		echo "<script>location.href='게시판.php'</script>";
	}

?>