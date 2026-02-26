<?php
include "db.php";
$id=$_GET['id'];
$conn->query("DELETE FROM trainers WHERE id=$id");
?>