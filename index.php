<?php
include("connection.php");

$data=mysql_query("select * from product");

$arrayProduct=array();
$list=array();

while($row=mysql_fetch_array($data)){
	$arrayProduct["id"]=$row["id"];
	$arrayProduct["name"]=$row["name"];
	$arrayProduct["price"]=$row["price"];
	$arrayProduct["description"]=$row["description"];
	$list[]=$arrayProduct;
}

echo json_encode($list);

?>