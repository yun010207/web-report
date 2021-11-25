<?php
    include '로그인 상태.php';

    $id = $_POST['id'];
    $pass = $_POST['password'];

    $sql = "select * from member_tbl";
    $result = mysqli_query($connect, $sql);

    $signin = false;
    $i = 0;
    $size = mysqli_num_rows($result);
    while($i++ < $size) {
        $row = mysqli_fetch_array($result);
        if ($row['id'] == $id && $row['password'] == $pass) {
            $signin = true;
            break;
        }
    }
    if($signin == true) {
        $_SESSION['username'] = time();
        echo "<script>location.href='동의대 구인 사이트.php'</script>";
    }
    else {
        echo "<script>alert('ID 또는 비밀번호가 잘못되었습니다.');</script>";
        echo "<script>location.href='로그인 화면.php'</script>";
    }
?>