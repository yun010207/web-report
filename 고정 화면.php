<?php 
	include '로그인 상태.php';
?>
<!DOCTYPE html>
<html>
<head>
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
</body>
</html>