<?php
$conn = new mysqli("localhost","root", null, "lab5" );
if($conn->connect_error) die ($conn->connect_error);
$q="select *from classics";
$res = $conn->query($q);
$resarray = $res->fetch_all();
echo json_encode($resarray);
?>