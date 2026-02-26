<?php
include 'db.php'; // or database.php (your connection file)

$data=json_decode(file_get_contents("php://input"),true);

$member=$data['member_id'];
$weight=$data['weight'];
$height=$data['height'];
$bmi=$data['bmi'];

$sql="INSERT INTO progress(member_id,weight,height,bmi,date)
VALUES('$member','$weight','$height','$bmi',CURDATE())";

mysqli_query($conn,$sql);

echo json_encode(["message"=>"Progress Saved"]);
?>