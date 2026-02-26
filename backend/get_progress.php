<?php
include 'db.php'; // or database.php (your connection file)

$member_id = $_GET['member_id'];

$sql = "SELECT date,bmi FROM progress WHERE member_id='$member_id' ORDER BY date";
$result = mysqli_query($conn,$sql);

$data = [];

while($row = mysqli_fetch_assoc($result)){
    $data[] = $row;
}

echo json_encode($data);
?>