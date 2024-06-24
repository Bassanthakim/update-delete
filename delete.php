<?php
include('./dbcon.php');

$id=$_GET['id'];

$sql="DELETE FROM students WHERE student_id = '$id'";

$conn->exec($sql);

echo "<br>" . "Data Delete Succ";

header ('refresh:3 URL= ./select.php');
?>