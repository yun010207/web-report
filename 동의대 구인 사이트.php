<?php 
	include '로그인 상태.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>동의대 구인 사이트</title>
	<!--상단 검색 블럭-->
	<style>
		#search {
			z-index: 1;
            position: fixed;
            width: 99%;
            height: 50px;
            top: 0px;

			text-align: center;
			margin: 10px auto;
			background: gray;
		}
		.search-form{
			margin-top: 10px;
		}
		.search-input{
			width: 5%;
		}
		.search-submit{
			top: 10px;
		}
	</style>
	<!--좌측 회원 블럭-->
	<style>
		#member > legend {
			position: relative;
			top: 50%;
		}
		#member {
			display: table-cell;
			text-align: center;
			vertical-align: middle;
			top: 65px;
			position: fixed;
			float: left;
			width: 15%;
			height: 93%;
			background: rgb(255, 195, 100);
		}
	</style>
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
	<div id="search"><!--검색 칸-->
		<form class="search-form">
            <input type="search" size="150" class="input-search" />
            <input type="submit" class="input-search-submit" value="검색"/>
		</form>
	</div>
	<div id="member"><!--좌측 회원 칸-->
		<?php
			if($is_login) {
				echo '
				<form method="post" action="로그아웃.php">
					<input type="submit" value="로그아웃">
				</form>
				';
			}
			else {
				echo '
				<legend>
					사이트를 이용하려면<br>
					회원가입이 필요합니다.
					<form method="post" action="로그인 화면.php">
						<input type="submit" name="로그인" value="로그인">
					</form>
					<form method="post" action="회원가입 화면.php">
						<input type="submit" name="회원가입" value="회원가입">
					</form>
				</legend>
				';
			}
		?>
		
	</div>
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
			도움 요청 게시판
		</div>
		<div class="board" name="team-board">
			팀플 구인 게시판
		</div>
		<div class="board" name="taxi-board">
		택시 합승 게시판
		</div>
		<div class="board" name="survey-board">
		설문조사 게시판
		</div>
	</div>
	<div id="depart">
		학과 게시판 블럭
	</div>
</body>
</html>