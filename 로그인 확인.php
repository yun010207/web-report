<?php
    include '로그인 상태.php';
    $password = $_POST['password'];
    $host = "localhost";
    $user = "root";

    $connect = mysqli_connect($host, $user) or die("mysql서버 접속 에러");
    mysqli_select_db($connect, "웹프과제") or die("DB 접근 에러");

    $id = $_POST['id'];
    $pass = $_POST['password'];

    $sql = "select * from member_tbl";
    $result = mysqli_query($connect, $sql);

    $i = 0;
    $size = mysqli_num_rows($result);

    $signin = false;
    while($i++ < $size) {
        $row = mysqli_fetch_array($result);
        if($id==$row['id']&&$pass==$row['password']) {
            $signin = true;
        }
    }
    if($signin == true) {
        $_SESSION['username'] = $id;
        echo "<script>location.href='동의대 구인 사이트.php'</script>";
    }
    else {
        echo "<script>alert('ID 또는 비밀번호가 잘못되었습니다.');</script>";
        echo "<script>location.href='로그인 화면.php'</script>";
    }
    mysqli_close();
?>