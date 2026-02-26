<?php
session_start();
include "db.php";

/* check login */
if(!isset($_SESSION['email'])){
echo json_encode([
"name"=>"Not logged in",
"plan"=>"",
"expiry"=>"",
"bmi"=>"",
"trainer"=>""
]);
exit();
}

$email = $_SESSION['email'];

/* get member data */
$res = $conn->query("
SELECT members.*, trainers.name as trainer_name 
FROM members 
LEFT JOIN trainers ON members.trainer_id = trainers.id
WHERE members.email = '$email'
");

/* if member not found */
if($res->num_rows == 0){
echo json_encode([
"name"=>"No data",
"plan"=>"",
"expiry"=>"",
"bmi"=>"",
"trainer"=>""
]);
exit();
}

$row = $res->fetch_assoc();

/* send data */
echo json_encode([
"name" => $row['name'],
"plan" => $row['membership_plan'],
"expiry" => $row['expiry_date'],
"bmi" => $row['bmi'],
"trainer" => $row['trainer_name'] ? $row['trainer_name'] : "Not Assigned"
]);
?>