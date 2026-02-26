<?php
session_start();
include "db.php";

$email=$_SESSION['email'];

$m=$conn->query("SELECT id FROM members WHERE email='$email'")->fetch_assoc();
$mid=$m['id'];

$res=$conn->query("SELECT weight,bmi,date FROM progress 
WHERE member_id='$mid' ORDER BY date DESC");

$data=[];
while($row=$res->fetch_assoc()){
$data[]=$row;
}

echo json_encode($data);
?>