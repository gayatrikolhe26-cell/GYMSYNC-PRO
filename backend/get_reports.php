<?php
include "db.php";

/* TOTAL REVENUE */
$totalRevenue = $conn->query("SELECT SUM(amount) as total FROM payments WHERE status='Paid'")
->fetch_assoc()['total'] ?? 0;

/* TODAY REVENUE */
$today = date("Y-m-d");
$todayRevenue = $conn->query("SELECT SUM(amount) as total FROM payments 
WHERE payment_date='$today'")
->fetch_assoc()['total'] ?? 0;

/* MONTH REVENUE */
$month = date("m");
$year = date("Y");
$monthRevenue = $conn->query("SELECT SUM(amount) as total FROM payments 
WHERE MONTH(payment_date)='$month' AND YEAR(payment_date)='$year'")
->fetch_assoc()['total'] ?? 0;

/* MEMBERS */
$totalMembers = $conn->query("SELECT COUNT(*) as c FROM members")
->fetch_assoc()['c'];

$activeMembers = $conn->query("SELECT COUNT(*) as c FROM members WHERE status='Active'")
->fetch_assoc()['c'];

$expiredMembers = $conn->query("SELECT COUNT(*) as c FROM members WHERE status='Expired'")
->fetch_assoc()['c'];

/* TRAINERS */
$totalTrainers = $conn->query("SELECT COUNT(*) as c FROM trainers")
->fetch_assoc()['c'];

echo json_encode([
"totalRevenue"=>$totalRevenue,
"todayRevenue"=>$todayRevenue,
"monthRevenue"=>$monthRevenue,
"totalMembers"=>$totalMembers,
"activeMembers"=>$activeMembers,
"expiredMembers"=>$expiredMembers,
"totalTrainers"=>$totalTrainers
]);
?>