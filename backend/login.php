<?php
include "db.php";

$email = $_POST['email'];
$password = $_POST['password'];

/* Check admins */
$sql = "SELECT * FROM admins WHERE email='$email' AND password='$password'";
$result = $conn->query($sql);

if($result->num_rows > 0){
    echo "success";
    exit;
}

/* Check members */
$sql2 = "SELECT * FROM members WHERE email='$email' AND password='$password'";
$res2 = $conn->query($sql2);

if($res2->num_rows > 0){
    echo "success";
    exit;
}

echo "invalid";
?>