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
		<form method="post" action="글쓰기.php">
			<input type="submit" value="글쓰기">
			<hr>
		</form>
		<?php
			$kind = $_SESSION['kind'];
			if ($kind == '학과') {
				$dpsql = "select * from member_tbl where id = '$id'";
				$dpresult = mysqli_query($connect, $dpsql);
				$dprow = mysqli_fetch_array($dpresult);
				$depart = $dprow['depart'];

				$sql = "select * from board where kind = '$kind' order by number desc";
				$result = mysqli_query($connect, $sql);
				$num = mysqli_num_rows($result);
				for($i = 0; $i < $num; $i++) {
					$row = mysqli_fetch_array($result);
					$wrtid = $row['writer'];
					$dpsql2 = "select * from member_tbl where id = '$wrtid'";
					$dpresult2 = mysqli_query($connect, $dpsql2);
					$dprow = mysqli_fetch_array($dpresult2);
					$wrtdepart = $dprow['depart'];
					if ($depart == $wrtdepart) {
					echo '<a href="보드.php?num=';
					echo $row['number'];
					echo '">';
					echo $row['title'];
					echo "</a>";
					echo "<hr>";
					}
				}
			}
			else {
				$sql = "select * from board where kind = '$kind' order by number desc";
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
			}
		?>
	</div>
</body>
</html>