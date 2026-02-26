<?php
include "db.php";

$data = [];

/* total members */
$res1 = $conn->query("SELECT COUNT(*) as total FROM members");
$data['members'] = $res1->fetch_assoc()['total'];

/* active members */
$res2 = $conn->query("SELECT COUNT(*) as active FROM members WHERE status='active'");
$data['active'] = $res2->fetch_assoc()['active'];

/* trainers */
$res3 = $conn->query("SELECT COUNT(*) as trainers FROM trainers");
$data['trainers'] = $res3->fetch_assoc()['trainers'];

/* revenue */
$res4 = $conn->query("SELECT SUM(amount) as revenue FROM payments WHERE status='Paid'");
$row4 = $res4->fetch_assoc();
$data['revenue'] = $row4['revenue'] ? $row4['revenue'] : 0;

echo json_encode($data);
/* expired */
$expired = $conn->query("
SELECT COUNT(*) as c FROM members 
WHERE expiry_date < CURDATE()
")->fetch_assoc()['c'];

?>