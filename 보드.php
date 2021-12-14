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
		}
		#board {
			min-height:500px;
			height: auto;
		}
	</style>
	<!--댓글 블럭-->
	<style>
		#comment{
			position: relative;
			background: rgb(233,196,196);
			min-height:300px;
		}
		#memocol {
			background: rgb(255, 230, 204);
		}
		#rec {
			display: inline;
		}
		#bmk {
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
		<div id="board">
			<?php
			if (isset($_GET['num'])) {
				$num = $_GET['num'];
				$_SESSION['boardnum'] = $num;
			}
			else {
				$num = $_SESSION['boardnum'];
			}
			$sql = "select * from board where number = '$num'";
			$result = mysqli_query($connect, $sql);
			$row = mysqli_fetch_array($result);
			$cnum = $row['comment'];
			echo "제목 : ";
			echo $row['title'];
			echo "&nbsp&nbsp|&nbsp&nbsp조회수 : ";
			echo $row['view'];
			$sql_r = "select * from recommend where kind='board' and number='$num'";
			$result_r = mysqli_query($connect, $sql_r);
			$recnum = mysqli_num_rows($result_r);
			echo "&nbsp&nbsp|&nbsp&nbsp추천수 : ";
			echo $recnum;
			echo "&nbsp&nbsp|&nbsp&nbsp글쓴이 : ";
			$writer = $row['writer'];
			$id = $_SESSION['username'];
			$sql2 = "select depart from member_tbl, board where member_tbl.id = board.writer and board.number = '$num'";
			$result2 = mysqli_query($connect, $sql2);
			$row2 = mysqli_fetch_array($result2);
			echo $row2['depart'];
			$sql = "select * from board where number = '$num'";
			$result = mysqli_query($connect, $sql);
			$row = mysqli_fetch_array($result);
			echo "&nbsp&nbsp|&nbsp&nbsp작성일시 : ";
			echo $row['boarddate'];
			echo "&nbsp&nbsp|&nbsp&nbsp";
			echo "<form method='post' action='추천.php' id='rec'>";
			echo "<input type='submit' name='recommend' value='추천'>";
			echo '<input type="hidden" name="kind" value="board">';
			echo "</form>";
			echo "&nbsp&nbsp|&nbsp&nbsp";
			echo "<form method='post' action='즐겨찾기.php' id='bmk'>";
			echo "<input type='submit' name='recommend' value='즐겨찾기 등록'>";
			echo "<input type='hidden' name='num' value='$num'>";
			echo "</form>";
			echo "<hr>";
			echo nl2br($row['content']);
			$sql = "update board set view = view + 1 where number = '$num'";
			$result = mysqli_query($connect, $sql);

			$sql_con_rcv = "select * from recentview where id = '$id' and boardnum = '$num'";
			$result_con_rct = mysqli_query($connect, $sql_con_rcv);
			if(mysqli_num_rows($result_con_rct) == 0) {
				$sql_rcv = "insert into recentview(id, boardnum) values('$id', '$num')";
				$result_rcv = mysqli_query($connect, $sql_rcv);
			}
			else {
				$sql_rcv = "delete from recentview where boardnum='$num' and id = '$id'";
				$result_rcv = mysqli_query($connect, $sql_rcv);
				$sql_rcv = "insert into recentview(id, boardnum) values('$id', '$num')";
				$result_rcv = mysqli_query($connect, $sql_rcv);
			}
		?>
		</div>
		
		<div id="comment">
			<fieldset id="memocol">
				<form action="댓글 저장.php" method="post">댓글 작성<textarea type="memo" name="content" rows=3 cols=100></textarea>
					<input type="submit" value="확인">
					<input type="hidden" name="num" value="
					<?php echo $num; ?>
					">
				</form>
			</fieldset>
			<?php
				$sql_c = "select * from comment where boardnum = '$num' order by commentnum desc";
				$result_c = mysqli_query($connect, $sql_c);
				$comnum = mysqli_num_rows($result_c);

				

				for($i = 0; $i < $comnum; $i++) {
					$row_c = mysqli_fetch_array($result_c);
					$id = $row_c['writer'];
					$sql_d = "select * from member_tbl inner join comment on member_tbl.id = comment.writer where comment.writer = '$id'";
					$result_d = mysqli_query($connect, $sql_d);
					$row_d = mysqli_fetch_array($result_d);

					echo $row_d['depart'];
					echo "|댓글 : ";
					echo $row_c['content'];
					echo "&nbsp&nbsp|&nbsp&nbsp 추천수 : ";
					$comennum = $row_c['commentnum'];
					$sql_r = "select * from recommend where kind='comment' and number='$comennum'";
					$result_r = mysqli_query($connect, $sql_r);
					$recnum = mysqli_num_rows($result_r);
					echo $recnum;
					echo "&nbsp&nbsp|&nbsp&nbsp 작성일시 : ";
					echo $row_c['commentdate'];
					echo "&nbsp&nbsp|&nbsp&nbsp";
					echo "<form method='post' action='추천.php' id='rec'>";
					echo "<input type='submit' name='recommend' value='추천'>";
					echo '<input type="hidden" name="cr_num" value="';
					echo $row_c['commentnum'];
					echo '">';
					echo '<input type="hidden" name="kind" value="comment">';
					echo "</form>";
					echo "<hr>";
				}
			?>
		</div>
	</div>
	<div class="vertical-advertisement">
		세로 광고 블럭
	</div>
	
</body>
</html>