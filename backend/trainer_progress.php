<?php
include "db.php";

$member_id=$_GET['member_id'];

$res=$conn->query("SELECT weight,bmi,date FROM progress 
WHERE member_id='$member_id' ORDER BY date DESC");

$data=[];
while($row=$res->fetch_assoc()){
$data[]=$row;
}

echo json_encode($data);
?>