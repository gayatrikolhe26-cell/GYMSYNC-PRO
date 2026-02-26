<?php
session_start();
include "db.php";

$email=$_SESSION['email'];

$t=$conn->query("SELECT * FROM trainers WHERE email='$email'")->fetch_assoc();
$tid=$t['id'];

$res=$conn->query("SELECT name,phone,status FROM members WHERE trainer_id='$tid'");

$members=[];
while($row=$res->fetch_assoc()){
$members[]=$row;
}

echo json_encode([
"trainer"=>$t['name'],
"members"=>$members
]);
?>