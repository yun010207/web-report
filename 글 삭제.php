<?php
	include 'mysql.php';
	$boardnum = $_SESSION['boardnum'];

	$cmt_slt_sql = "select * from comment where boardnum=$boardnum";
	$cmt_slt_result = mysqli_query($connect, $cmt_slt_sql);
	for ($i = 0; $i < mysqli_num_rows($cmt_slt_result); $i++) {
		$cmt_slt_row = mysqli_fetch_array($cmt_slt_result);
		$commentnum = $cmt_slt_row['commentnum'];
		$dlreccsql = "delete from recommend where kind='comment' and number=$commentnum";
		$dlreccresult = mysqli_query($connect, $dlreccsql);
		$rplsql = "select * from reply where commentnum = '$commentnum'";
		$rplresult = mysqli_query($connect, $rplsql);
		for ($j = 0; $j < mysqli_num_rows($rplresult); $j++) {
			$aarow = mysqli_fetch_array($rplresult);
			$replynum = $aarow['replynum'];
			$dlrecrsql = "delete from recommend where kind='reply' and number='$replynum'";
			$dlrecrresult = mysqli_query($connect, $dlrecrsql);

		}
		$rpysql = "delete from reply where commentnum=$commentnum";
		$rpyresult = mysqli_query($connect, $rpysql);
	}
	

	$bdsql = "delete from board where number=$boardnum";
	$bdresult = mysqli_query($connect, $bdsql);

	$cmtsql = "delete from comment where boardnum=$boardnum";
	$cmtresult = mysqli_query($connect, $cmtsql);
	$bmksql = "delete from bookmark where boardnum='$boardnum'";
	$bmkresult = mysqli_query($connect, $bmksql);

	$rctsql = "delete from recentview where boardnum='$boardnum'";
	$rctresult = mysqli_query($connect, $rctsql);

	$dlrecbsql = "delete from recommend where kind='board' and number='$boardnum'";
	$dlrecbresult = mysqli_query($connect, $dlrecbsql);


	echo "<script>location.href='게시판.php'</script>";

?>