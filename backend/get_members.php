<?php
include "db.php";

$search = isset($_GET['search']) ? $_GET['search'] : "";
$status = isset($_GET['status']) ? $_GET['status'] : "all";

$query = "
SELECT m.*, t.name AS trainer_name
FROM members m
LEFT JOIN trainers t ON m.trainer_id = t.id
WHERE 1
";

/* Search filter */
if(!empty($search)){
$query .= " AND (m.name LIKE '%$search%' OR m.phone LIKE '%$search%')";
}

/* Status filter */
if($status == "active"){
$query .= " AND m.status = 'active'";
}
elseif($status == "due"){
$query .= " AND m.status = 'due'";
}

$query .= " ORDER BY m.id DESC";

$result = $conn->query($query);

$data = [];

while($row = $result->fetch_assoc()){
$data[] = $row;
}

echo json_encode($data);
?>