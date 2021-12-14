<?php 
	include '고정 화면.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>동의대 구인 사이트</title>
	<!--광고 블럭-->
	<style>
		#advertisement{
		}
		.horizontal-advertisement {
			position: absolute;
			margin: 10px;
			top: 60px;
			left: 16%;
			width: 1580px;
			height: 200px;
			background: rgb(189,241,255);
		}
		.vertical-advertisement {
			margin: 10px;
			position: absolute;
			right: 0%;
			top: 1000px;
			width: 22%;
			height: 800px;
			margin: 10px;
			background: rgb(189,241,255);
		}
	</style>
	<!--메인 블럭-->
	<style>
		.board a {
			text-decoration: none;
			color: #026a5d;
		}
		#center{
			position: absolute;
			top: 270px;
			left: 16%;
			width: 60%;
			margin: 10px;
			background: rgb(255,242,204);
			margin: 10px;
			height: 1520px;
		}
	</style>
	<!--학과 게시판 블럭-->
	<style>
		#depart {
			position: absolute;
			right: 0%;
			top: 270px;
			width: 22%;
			height: 715px;
			margin: 10px;
			background: rgb(233,196,196);
		}
	</style>
	<!--공지 블럭-->
	<style>
		
	</style>
	<!--메인 게시판 블럭-->
	<style>
		.notice{
			display: inline-block;
			margin: 10px;
			width: 97%;
			height: 2%;
			background: rgb(196,223,181);
		}
		#bhead {
			height: 6%;
		}
		.board{
			display: inline-block;
			margin: 10px;
			width: 47%;
			height: 47%;
			background: rgb(196,223,181);
		}
		#depart a {
			text-decoration: none;
			color: #026a5d;
		}
	</style>
</head>
<body>
	<div id="advertisement">
		<div class="horizontal-advertisement">
			가로 광고 블럭
		</div>
		<div class="vertical-advertisement">
			세로 광고 블럭
		</div>
	</div>
	<div id="center">
		<div class="notice">
			공지
		</div>
		<div class="board" name="help-board">
			<?php 
				if(isset($_SESSION['username'])) {
				echo "<div id='bhead'><b><a href='도움 변경.php'>도움 요청 게시판</a></b></div><hr>";
					$enter = '보드.php';
				}
				else {
				echo "<div id='bhead'><b><a href='로그인 화면.php'>도움 요청 게시판</a></b></div><hr>";
					$enter = '로그인 화면.php';
				}
				$sql = "select * from board where kind = '도움' order by number desc";
				$result = mysqli_query($connect, $sql);
				$num = mysqli_num_rows($result);
				for($i = 0; $i < $num; $i++) {
					$row = mysqli_fetch_array($result);
					echo "<a href='$enter?num=";
					echo $row['number'];
					echo "'>";
					echo $row['title'];
					echo "</a>";
					echo "<hr>";
				}
				for (; $i < 17; $i++) {
					echo "<a href='#'>&nbsp</a>";
					echo "<hr>";
				}
			?>
		</div>
		<div class="board" name="team-board">
			<?php 
				if(isset($_SESSION['username'])) {
				echo "<div id='bhead'><b><a href='팀플 변경.php'>팀플 모집 게시판</a></b></div><hr>";
					$enter = '보드.php';
				}
				else {
				echo "<div id='bhead'><b><a href='로그인 화면.php'>팀플 모집 게시판</a></b></div><hr>";
					$enter = '로그인 화면.php';
				}
				$sql = "select * from board where kind = '팀플' order by number desc";
				$result = mysqli_query($connect, $sql);
				$num = mysqli_num_rows($result);
				for($i = 0; $i < $num; $i++) {
					$row = mysqli_fetch_array($result);
					echo "<a href='$enter?num=";
					echo $row['number'];
					echo "'>";
					echo $row['title'];
					echo "</a>";
					echo "<hr>";
				}
				for (; $i < 17; $i++) {
					echo "<a href='#'>&nbsp</a>";
					echo "<hr>";
				}
			?>
		</div>
		<div class="board" name="taxi-board">
			<?php 
				if(isset($_SESSION['username'])) {
				echo "<div id='bhead'><b><a href='택시 변경.php'>택시 합승 게시판</a></b></div><hr>";
					$enter = '보드.php';
				}
				else {
				echo "<div id='bhead'><b><a href='로그인 화면.php'>택시 합승 게시판</a></b></div><hr>";
					$enter = '로그인 화면.php';
				}
				$sql = "select * from board where kind = '택시' order by number desc";
				$result = mysqli_query($connect, $sql);
				$num = mysqli_num_rows($result);
				for($i = 0; $i < $num; $i++) {
					$row = mysqli_fetch_array($result);
					echo "<a href='$enter?num=";
					echo $row['number'];
					echo "'>";
					echo $row['title'];
					echo "</a>";
					echo "<hr>";
				}
				for (; $i < 17; $i++) {
					echo "<a href='#'>&nbsp</a>";
					echo "<hr>";
				}
			?>
		</div>
		<div class="board" name="survey-board">
			<?php 
				if(isset($_SESSION['username'])) {
				echo "<div id='bhead'><b><a href='설문 변경.php'>설문 조사 게시판</a></b></div><hr>";
					$enter = '보드.php';
				}
				else {
				echo "<div id='bhead'><b><a href='로그인 화면.php'>설문 조사 게시판</a></b></div><hr>";
					$enter = '로그인 화면.php';
				}

				$sql = "select * from board where kind = '설문' order by number desc";
				$result = mysqli_query($connect, $sql);
				$num = mysqli_num_rows($result);
				for($i = 0; $i < $num; $i++) {
					$row = mysqli_fetch_array($result);
					echo "<a href='$enter?num=";
					echo $row['number'];
					echo "'>";
					echo $row['title'];
					echo "</a>";
					echo "<hr>";
				}
				for (; $i < 17; $i++) {
					echo "<a href='#'>&nbsp</a>";
					echo "<hr>";
				}
			?>
		</div>
	</div>
	<div id="depart">
			<?php 
				$i=0;
				if(isset($_SESSION['username'])) {
				echo "<div id='bhead'><b><a href='학과 변경.php'>학과 게시판</a></b></div><hr>";
					$enter = '보드.php';
					$id = $_SESSION['username'];
					$dpsql = "select * from member_tbl where id = '$id'";
					$dpresult = mysqli_query($connect, $dpsql);
					$dprow = mysqli_fetch_array($dpresult);
					$depart = $dprow['depart'];

					$sql = "select * from board where kind = '학과' order by number desc";
					$result = mysqli_query($connect, $sql);
					$num = mysqli_num_rows($result);
					for(; $i < $num; $i++) {
						$row = mysqli_fetch_array($result);
						$wrtid = $row['writer'];
						$dpsql2 = "select * from member_tbl where id = '$wrtid'";
						$dpresult2 = mysqli_query($connect, $dpsql2);
						$dprow = mysqli_fetch_array($dpresult2);
						$wrtdepart = $dprow['depart'];
						if ($depart == $wrtdepart) {

							echo "<a href='$enter?num=";
							echo $row['number'];
							echo "'>";
							echo $row['title'];
							echo "</a>";
							echo "<hr>";
						}
						else {
							continue;
						}
					}
				}
				else {
				echo "<div id='bhead'><b><a href='로그인 화면.php'>학과 게시판</a></b></div><hr>";
					$enter = '로그인 화면.php';
				}
				for (; $i < 17; $i++) {
					echo "<a href='#'>&nbsp</a>";
					echo "<hr>";
				}

			?>
	</div>
</body>
</html>