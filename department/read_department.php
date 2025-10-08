<?php

# Verbindung mit der Datenbank mit einem PDO Objekt
$conn = new PDO('mysql:host=localhost;dbname=company', 'phpstorm', 'Ahmadtow7@');
$sql = 'SELECT * FROM department';
$stmt = $conn->prepare($sql);
$stmt->execute();
$array = $stmt->fetchAll(PDO::FETCH_ASSOC);

// echo json_encode($array);


function createTable(array $data, array|false $ueberschrifeten = false, string $farbe_1 = '#B0C4DE', string $farbe_2 = '#D3D3D3'): string
{
    $string = "<table style='border: aqua'>";
    $string .= "<tr>";
    foreach ($data[0] as $key => $value) {
        $string .= "<th>";
        $string .= "$key";
        $string .= "</th>";
    }
    $string .= "</tr>";


    foreach ($data as $index => $user) {
        if ($index % 2 == 0) {
            $color = $farbe_1;
        } else {
            $color = $farbe_2;
        }
        $string .= "<tr  style='background-color: $color'>";
        foreach ($user as $item) {
            $string .= "<td>";
            $string .= $item;
            $string .= "</td>";
        }
        $string .= "<td class='link' style='background-color: white'>";
        $id = $user['id'];
        $string .= "<a href='delete_department.php?id=$id'>Delete</a>";
        $string .= "</td>";
        $string .= "<td class='link' style='background-color: white'>";
        $string .= "<a href='update_department.php?id=$id'>Update</a>";
        $string .= "</td>";
        $string .= "</tr>";
    }
    $string .= "</table>";
    return $string;
}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>READ department</title>
</head>
<body>
<h1>Welcome in mein Firma</h1>
<h2>meine departments </h2>
<?= createTable($array) ?>

</body>
</html>
