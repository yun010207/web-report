<?php 
	include '고정 화면.php';
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
		<?php
			$search = $_POST['search'];
			$sql = "select * from board where title like '%$search%' or content like '%$search%' order by boarddate desc";
			$result = mysqli_query($connect, $sql);
			$num = mysqli_num_rows($result);
			for($i = 0; $i < $num; $i++) {
				$row = mysqli_fetch_array($result);
				echo '<a href="보드.php?num=';
				echo $row['number'];
				echo '">';
				echo $row['title'];
				echo "</a>";
				echo "<hr>";
			}
		?>
	</div>
</body>
</html>