<?php
include "db.php";

$date = date("Y-m-d");

$res = $conn->query("
SELECT members.name 
FROM attendance 
JOIN members ON attendance.member_id = members.id
WHERE attendance.date='$date'
");

$data=[];
while($row=$res->fetch_assoc()){
$data[]=$row;
}

echo json_encode($data);
?>