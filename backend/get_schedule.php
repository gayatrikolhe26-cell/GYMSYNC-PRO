<?php
include 'db.php';

$sql="SELECT schedule.*,members.name 
FROM schedule 
JOIN members ON schedule.member_id=members.id
ORDER BY class_date";

$res=mysqli_query($conn,$sql);

$data=[];
while($row=mysqli_fetch_assoc($res)){
$data[]=$row;
}

echo json_encode($data);
?>