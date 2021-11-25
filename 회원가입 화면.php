<!DOCTYPE html>

<html>
	<head>
		<title> FORM 태그와 컨트롤 - 회원등록 </title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    </script>
	</head>

	<body>
		<br><h2><center> 회원등록 화면</center></h2>

		<form method="post" action="회원 정보 입력 확인.php">
			<center>
				<table border="1" bordercolor="blue" width=840 cellspacing="1" cellpadding="5">
					<tr>
						<td width="250" align="right"> 아이디 : </td>
						<td width="330">
							<input type="text" size=10 maxlength=20 name="id">
						</td>
						<td width="250" align="right"> 성명 : </td>
						<td width="300">
							<input type="text" size=10 maxlength=10 name="name">
						</td>
					</tr>
					<tr>
						<td align="right"> 비밀번호 : </td>
						<td>
							<input type="password" size=20 maxlength=20 name="password">
						</td>
						<td align="right"> 비밀번호 확인 : </td>
						<td>
							<input type="password" size=20 maxlength=20 name="checkpw">
						</td>
					</tr>

					<tr>
						<td align="right"> 핸드폰(' - ' 제외) : </td>
						<td>
							<input type="text" size=20 maxlength="10" name="phone">
						</td>

						<td align="right"> 성별 : </td>
						<td>
							<input type="radio" name="sex" value="남자"> 남
							<input type="radio" name="sex" value="여자"> 여
						</td>
					</tr>
					<tr>
						<td align="right"> 학과 : </td>
						<td>
							<input type="text" size="40" name="depart">
						</td>
						<td align="right"> 학번 : </td>
						<td>
							<input type="text" size="10" name="student_id">
						</td>
					</tr>

				</table>

				<br>

				<table border=0 width=840>
					<tr>
						<td align="center">
							<input type="submit" value="◀ 회원등록 ▶"> &nbsp;&nbsp;&nbsp;&nbsp;
							<input type="reset" value="▶ 다시작성 ◀">
						</td>
					</tr>
				</table>
				<center>
					<input type="hidden" name="thema" value="회원등록 서식">
				</center>

			</center>
		</form>
	</body>
</html>