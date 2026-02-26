<?php
include "db.php";

$res = $conn->query("
SELECT payments.id,
members.name AS member_name,
payments.amount,
payments.payment_date
FROM payments
JOIN members ON payments.member_id = members.id
ORDER BY payments.id DESC
");

$data = [];

while($row = $res->fetch_assoc()){
    $data[] = [
        "id" => $row['id'],
        "member_name" => $row['member_name'],
        "amount" => $row['amount'],
        "date" => $row['payment_date']
    ];
}

echo json_encode($data);
?>