<?php
session_start();
include "db.php";

header("Content-Type: application/json");

if(!isset($_SESSION['email'])){
echo json_encode(["members"=>[],"total"=>0,"active"=>0,"attendance"=>0]);
exit;
}

$trainer_email = $_SESSION['email'];

/* Get trainer id */
$t = $conn->query("SELECT id FROM trainers WHERE email='$trainer_email'");
$trainer = $t->fetch_assoc();

if(!$trainer){
echo json_encode(["members"=>[],"total"=>0,"active"=>0,"attendance"=>0]);
exit;
}

$trainer_id = $trainer['id'];

/* Get members */
$res = $conn->query("
SELECT id,name,phone,bmi,status 
FROM members 
WHERE trainer_id='$trainer_id'
");

$members=[];
while($row=$res->fetch_assoc()){
$members[]=$row;
}

/* Counts */
$total = count($members);

$active = 0;
foreach($members as $m){
if($m['status']=="Active") $active++;
}

echo json_encode([
"members"=>$members,
"total"=>$total,
"active"=>$active,
"attendance"=>0
]);