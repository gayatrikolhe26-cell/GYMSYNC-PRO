<?php
include "db.php";

$email = $_POST['email'];
$password = $_POST['password'];

if(empty($email) || empty($password)){
    echo "Please fill all fields";
    exit;
}

/* Admin */
$checkAdmin = $conn->query("SELECT * FROM admins WHERE email='$email'");
if($checkAdmin->num_rows > 0){
    $conn->query("UPDATE admins SET password='$password' WHERE email='$email'");
    echo "Admin password updated successfully!";
    exit;
}

/* Member */
$checkMember = $conn->query("SELECT * FROM members WHERE email='$email'");
if($checkMember->num_rows > 0){
    $conn->query("UPDATE members SET password='$password' WHERE email='$email'");
    echo "Member password updated successfully!";
    exit;
}

echo "Email not found.";
?>