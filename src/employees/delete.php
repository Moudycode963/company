<?php

$conn = new PDO('mysql:host=localhost;dbname=company', 'phpstorm', 'Ahmadtow7@');
$sql = 'DELETE FROM employees WHERE id = :id';
$id = $_GET['id'];
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();
echo 'wurde deleted!';