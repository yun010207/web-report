<?php
    include 'mysql.php';
    session_unset();
    session_destroy();
    echo "<script>location.href='동의대 구인 사이트.php'</script>";
?>