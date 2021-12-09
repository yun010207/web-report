<?php
    include '로그인 상태.php';

    $id = $_POST['id'];
    $pass = $_POST['password'];

    $sql = "select * from member_tbl where id = '$id' and password='$pass'";
    $result = mysqli_query($connect, $sql);

    
    if($result) {
        $_SESSION['username'] = time();
        echo "<script>location.href='동의대 구인 사이트.php'</script>";
    }
    else {
        echo "<script>alert('ID 또는 비밀번호가 잘못되었습니다.');</script>";
        echo "<script>location.href='로그인 화면.php'</script>";
    }
?>