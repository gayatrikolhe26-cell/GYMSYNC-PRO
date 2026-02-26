<?php
session_start();
include "db.php";

$email = $_SESSION['email'];

/* MEMBER INFO */
$member = $conn->query("
SELECT members.*, trainers.name as trainer_name
FROM members
LEFT JOIN trainers ON members.trainer_id = trainers.id
WHERE members.email='$email'
")->fetch_assoc();

$mid = $member['id'];

/* PAYMENT HISTORY */
$paymentsRes = $conn->query("
SELECT amount, payment_date 
FROM payments 
WHERE member_id='$mid' 
ORDER BY payment_date DESC
");

$payments = [];
while($row = $paymentsRes->fetch_assoc()){
    $payments[] = $row;
}

/* ATTENDANCE COUNT */
$attendanceCount = $conn->query("
SELECT COUNT(*) as c FROM attendance 
WHERE member_id='$mid'
")->fetch_assoc()['c'];

echo json_encode([
"name"=>$member['name'],
"phone"=>$member['phone'],
"email"=>$member['email'],
"join_date"=>$member['join_date'] ?? "",
"plan"=>$member['membership_plan'],
"expiry"=>$member['expiry_date'],
"status"=>$member['status'],
"bmi"=>$member['bmi'],
"trainer"=>$member['trainer_name'] ?? "Not Assigned",
"attendance"=>$attendanceCount,
"payments"=>$payments

]);
?>