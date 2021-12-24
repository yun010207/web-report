<?php 
    include 'mysql.php';
?>

<!DOCTYPE html>
<html>
<head>
	<!--상단 검색 블럭-->
	<style>
		#search a {
			text-decoration: none;
			position: absolute;
			top: 15px;
			left: 70px;
			color: #00defe;
		}
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
		#member {
			display: table-cell;
			text-align: center;
			top: 65px;
			position: fixed;
			float: left;
			width: 15%;
			height: 93%;
			background: rgb(255, 195, 100);
		}
		.islogin {
			position: relative;
			height: auto;
		}
		#member > div {
			position: relative;
			top: 7%;
			height: 18.4%;
		}
		#member a {
			text-decoration: none;
			color: #311432;
		}
	</style>

</head>
<body>
	<div id="search"><!--검색 칸-->
		<a href='동의대 구인 사이트.php'>동의대 구인 사이트 홈</a>
		<form class="search-form" action="검색 게시판.php" method="post">
            <input type="search" size="150" class="input-search" name="search"/>
            <input type="submit" class="input-search-submit" value="검색"/>
		</form>
	</div>
	<div id="member"><!--좌측 회원 칸-->
		<div class="islogin">
			<?php
			if(isset($_SESSION['username'])) {
				$id = $_SESSION['username'];
				echo "ID : ".$id;
				echo "<br>소속 : ";
				$sql = "select * from member_tbl where id = '$id'";
				$result = mysqli_query($connect, $sql);
				$row = mysqli_fetch_array($result);
				$depart = $row['depart'];
				echo $depart;

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
		<hr>
		<div id="recent-view">
		<?php 
			$kind = '최근 본 글';
			if(isset($_SESSION['username'])) {
				echo '<a href="기록.php?kind=';
				echo $kind;
				echo '">최근 본 글</a>';
			}
			else
			echo "<a href='로그인 화면.php'>최근 본 글</a>";
		?>
		</div>
		<hr>
		<div id="bookmark">
		<?php 
			$kind = '즐겨찾기 한 글';
			if(isset($_SESSION['username'])) {
				echo '<a href="기록.php?kind=';
				echo $kind;
				echo '">즐겨찾기 한 글</a>';
			}
			else
			echo "<a href='로그인 화면.php'>즐겨찾기 한 글</a>";
		?>
		</div>
		<hr>
		<div id="write-board">
		<?php 
			$kind = '작성한 글';
			if(isset($_SESSION['username'])) {
				echo '<a href="기록.php?kind=';
				echo $kind;
				echo '">작성한 글</a>';
			}
			else
			echo "<a href='로그인 화면.php'>작성한 글</a>";
		?>
		</div>
		
		<hr>
		<div id="write-comment">
		<?php 
			$kind = '작성한 댓글';
			if(isset($_SESSION['username'])) {
				echo '<a href="기록.php?kind=';
				echo $kind;
				echo '">작성한 댓글</a>';
			}
			else
			echo "<a href='로그인 화면.php'>작성한 댓글</a>";
		?>
		</div>
		<hr>
			
	</div>
</body>
</html>