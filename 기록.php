<?php
	include '고정 화면.php'; 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
		#center{
			position: absolute;
			top: 70px;
			left: 16%;
			width: 60%;
			margin: 10px;
			background: rgb(255,242,204);
			margin: 10px;
			min-height:500px;
			height: auto;
		}
	</style>
	<!--댓글 블럭-->
	<style>
		#comment{
			position: relative;
			top: 330px;
			background: rgb(233,196,196);
			min-height:300px;
		}
		#memocol {
			background: rgb(255, 230, 204);
		}
		#rec {
			display: inline;
		}
	</style>
	<!--세로 광고 블럭-->
	<style>
		.vertical-advertisement {
			margin: 10px;
			position: absolute;
			right: 0%;
			top: 70px;
			width: 22%;
			height: 800px;
			margin: 10px;
			background: rgb(189,241,255);
		}
	</style>
</head>
<body>
	<div id="center">
		<?php
			$kind = $_GET['kind'];
			$id = $_SESSION['username'];
			if ($kind == '최근 본 글') {
				$sql = "select * from board, recentview where recentview.id = '$id' and recentview.boardnum = board.number order by recentview.viewtime desc";
				$result = mysqli_query($connect, $sql);
				$hisnum = mysqli_num_rows($result);
				for ($i = 0; $i < $hisnum ; $i++) {
					$row = mysqli_fetch_array($result);
					echo '<a href="보드.php?num=';
					echo $row['number'];
					echo '">';
					echo $row['title'];
					echo "</a><hr>";
				}
			}
			else if ($kind == '즐겨찾기 한 글') {
				$sql = "select * from bookmark where id = '$id'";
				$result = mysqli_query($connect, $sql);
				$hisnum = mysqli_num_rows($result);
				for ($i = 0; $i < $hisnum ; $i++) {
					$row = mysqli_fetch_array($result);
					echo '<a href="보드.php?num=';
					echo $row['boardnum'];
					echo '">';
					$bmnum = $row['boardnum'];
					$sqlsr = "select * from board where number = '$bmnum'";
					$resultsr = mysqli_query($connect, $sqlsr);
					$rowsr = mysqli_fetch_array($resultsr);
					echo $rowsr['title'];
					echo "</a><hr>";
				}
			}
			else if ($kind == '작성한 글') {
				$sql = "select * from board where writer = '$id' order by number desc";
				$result = mysqli_query($connect, $sql);
				$hisnum = mysqli_num_rows($result);
				for ($i = 0; $i < $hisnum ; $i++) {
					$row = mysqli_fetch_array($result);
					echo '<a href="보드.php?num=';
					echo $row['number'];
					echo '">';
					echo $row['title'];
					echo "</a><hr>";
				}
			}
			else if ($kind == '작성한 댓글') {
				$sql = "select * from comment where writer = '$id' order by commentnum desc";
				$result = mysqli_query($connect, $sql);
				$hisnum = mysqli_num_rows($result);
				for ($i = 0; $i < $hisnum ; $i++) {
					$row = mysqli_fetch_array($result);
					echo '<a href="보드.php?num=';
					echo $row['boardnum'];
					echo '">';
					echo $row['content'];
					echo "</a><hr>";
				}
			}
		?>
	</div>
	<div class="vertical-advertisement">
		세로 광고 블럭
	</div>
</body>
</html>