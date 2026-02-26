<?php
session_start();
include "db.php";

$email = $_SESSION['email'];

/* get member id */
$member = $conn->query("SELECT id FROM members WHERE email='$email'")->fetch_assoc();
$member_id = $member['id'];

/* fetch classes */
$res = $conn->query("
SELECT 
schedule.workout,
schedule.class_date,
schedule.class_time,
trainers.name as trainer
FROM schedule
LEFT JOIN trainers ON schedule.trainer_id = trainers.id
WHERE schedule.member_id='$member_id'
ORDER BY schedule.class_date ASC
");

$data = [];

while($row = $res->fetch_assoc()){
$data[] = $row;
}

echo json_encode($data);
?>