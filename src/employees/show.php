<?php
// daten auslesen aus dem Datensatz
$data = findById($id,'employees');
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>show employee</title>
</head>
<body>

<div><?= $data['fname']?></div>
<div><?= $data['lname']?></div>
<div><?= $data['id']?></div>

<a href='/employees/update/<?= $id ?>'>Update</a>
<a href='/employees/delete/<?= $id ?>'>delete</a>

</body>
</html>
