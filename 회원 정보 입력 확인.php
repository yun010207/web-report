<?php
	include 'mysql.php';
	$id = $_POST['id'];
	$name = $_POST['name'];
	$password = $_POST['password'];
	$checkpw = $_POST['checkpw'];
	$phone = $_POST['phone'];
	$sex = $_POST['sex'];
	$depart = $_POST['depart'];
	$student_id = $_POST['student_id'];
	$sql = "select * from member_tbl";

	$result = mysqli_query($connect, $sql);
	$ok = true;
	if ($id == NULL
		or $name == NULL
		or $password == NULL
		or $checkpw == NULL
		or $phone == NULL
		or $sex == NULL
		or $depart == NULL
		or $student_id == NULL) {
		echo "<script>alert('모든 정보를 입력하세요.');</script>";
		echo "<script>location.href='회원가입 화면.php'</script>";
	}
	else {
		$i = 0;
		$size = mysqli_num_rows($result);
		while($i++ < $size) {
			$row = mysqli_fetch_array($result);
			if ($id == $row['id']) {
				echo "<script>alert('이미 있는 ID입니다.');</script>";
				$ok = false;	
				break;
			}
			else if($phone == $row['phone']){
				echo "<script>alert('이미 있는 휴대폰 번호입니다.');</script>";
				$ok = false;	
				break;
			}
			else if($student_id == $row['student_id']){
				echo "<script>alert('이미 학번입니다.');</script>";
				$ok = false;	
				break;
			}
			else if ($password != $checkpw) {
				echo "<script>alert('비밀번호가 일치하지 않습니다..');</script>";
				$ok = false;	
				break;
			}
		}
		if ($ok == true) {	
			$sql = "insert into member_tbl values('$student_id', '$id',
			 '$name', '$password', '$phone', '$sex', '$depart')";

			$result = mysqli_query($connect, $sql);

			echo "<script>location.href='동의대 구인 사이트.php'</script>";
		}
		else {
			echo "<script>location.href='회원가입 화면.php'</script>";
		}
	}
    mysqli_close($result);
	/*
	$i = 0;
	$size = mysqli_num_rows($result);
	while($i++ < $size) {
		$row = mysqli_fetch_array($result);
		echo "id:".$row['id'];
		echo " name:".$row['name'];
		echo " password:".$row['password'];
		echo " phone:".$row['phone'];
		echo " sex:".$row['MW'];
		echo " depart:".$row['depart'];
		echo " student_id:".$row['student_id'];
		echo "<br>";
	}
	*/



?>