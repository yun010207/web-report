<?php 
	include '로그인 상태.php';
	include '고정 화면.php';
	$kind = "도움";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>게시판</title>
	<!--메인 블럭-->
	<style>
		#center{
			position: absolute;
			top: 70px;
			left: 16%;
			width: 60%;
			margin: 10px;
			background: rgb(255,242,204);
			margin: 10px;
			height: 1520px;
		}
	</style>
</head>
<body>
	<div id="center">
		<form method="post" action="글쓰기.php">
			<input type="submit" value="글쓰기">
		</form>
		<?php
			$sql = "select * from board where kind = '$kind'";
			$result = mysqli_query($connect, $sql);
			$num = mysqli_num_rows($result);
			for($i = 0; $i < $num; $i++) {
				$row = mysqli_fetch_array($result);
				echo "<a href='보드.php'>";
				echo $row['title'];
				echo "</a>";
				echo "<br>";
			}
		?>
	</div>
</body>
</html>