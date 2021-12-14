<?php 
    include 'mysql.php';
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
			margin: 10px;
			height: 1520px;
		}
	</style>
</head>
<body>
	<div id="center">
		<form method="post" action="글 저장.php" >
			<table border="1" align="center">
				<tr>
					<td>제목</td>
					<td>
						<input type="text" name="title" size=77 maxsize=77>
					</td>
					<td><input type="reset" value="글 지우기"></td>
					<td><input type="submit" value="글 저장"></td>
				</tr>
				<tr>
					<td>내용</td>
					<td colspan="3">
						<textarea type="memo" name="content" rows=50 cols=100></textarea>
					</td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>