<?php
//

remove($id,'employees');
header("Location: ". DOMAIN_NAME . "/employees/read");
exit();


//
//$conn = dbcon();
//$sql = 'DELETE FROM employees WHERE id = :id';
////$id = $_GET['id'];
//$stmt = $conn->prepare($sql);
//$stmt->bindParam(':id', $id);
//$stmt->execute();
//
//echo 'wurde deleted!';