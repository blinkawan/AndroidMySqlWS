<?php
include("connection.php");

$id=$_GET["id"];

$data=mysql_query("select * from product where id=$id");

$arrayProduct=array();

while($row=mysql_fetch_array($data)){
	$arrayProduct["id"]=$row["id"];
	$arrayProduct["name"]=$row["name"];
	$arrayProduct["price"]=$row["price"];
	$arrayProduct["description"]=$row["description"];
}

echo json_encode($arrayProduct);
?>