<?php 
	include '로그인 상태.php';
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
			top: 990px;
			width: 22%;
			height: 800px;
			margin: 10px;
			background: rgb(189,241,255);
		}
	</style>
	<!--메인 블럭-->
	<style>
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
			height: 700px;
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
		.board{
			display: inline-block;
			margin: 10px;
			width: 47%;
			height: 47%;
			background: rgb(196,223,181);
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
			<a href="게시판.php">도움 요청 게시판</a>
		</div>
		<div class="board" name="team-board">
			<a href="게시판.php">팀플 구인 게시판</a>
		</div>
		<div class="board" name="taxi-board">
			<a href="게시판.php">택시 합승 게시판</a>
		</div>
		<div class="board" name="survey-board">
			<a href="게시판.php">설문 조사 게시판</a>
		</div>
	</div>
	<div id="depart">
		학과 게시판 블럭
	</div>
</body>
</html>