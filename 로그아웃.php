<?php
    include '로그인 상태.php';
    include 'mysql.php';
    $i = 0;
    $size = mysqli_num_rows($result);
    while($i++ < $size) {
        $row = mysqli_fetch_array($result);
        $id = $row['id'];
        if(isset($_SESSION[$id])) {
            $is_login = true;
        }
    }
?>