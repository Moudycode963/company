<?php

$conn = new PDO('mysql:host=localhost;dbname=company', 'phpstorm', 'Ahmadtow7@');
$sql = 'DELETE FROM department WHERE id = :id';
$id = $_GET['id'];
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();
header("location: read_department.php");
exit();