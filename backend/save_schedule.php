<?php
include 'db.php';

$data=json_decode(file_get_contents("php://input"),true);

$member=$data['member_id'];
$date=$data['date'];
$time=$data['time'];
$workout=$data['workout'];

session_start();
$trainer=$_SESSION['trainer_id']; // trainer login id

$sql="INSERT INTO schedule(member_id,trainer_id,class_date,class_time,workout)
VALUES('$member','$trainer','$date','$time','$workout')";

mysqli_query($conn,$sql);

echo json_encode(["message"=>"Class Scheduled"]);
?>