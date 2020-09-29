<?php 
	require_once("bridge.php");

	$data = json_decode(file_get_contents('php://input'), true);

	$city = strtolower($data['value']);

	if($data['type'] == "search_city"){
		$sql = "SELECT ID, Name, City FROM details WHERE City = ?";
        $res = execute($sql, array("s", $city), false);
        echo json_encode($res);;
	}

?>