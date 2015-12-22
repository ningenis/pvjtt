<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "_pvj";

	$con = new mysqli($host, $user, $pass, $db);
	
	

	$sql = "SELECT * FROM `product`";

	$qry = $con->query($sql);

	$data = array();
	if($qry->num_rows > 0) {
		while($row = $qry->fetch_object()) {
			$data[] = $row;
		}
	} else {
		$data[] = null;
	}
	$con->close();

	echo json_encode($data);
?>