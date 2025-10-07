<?php

// إنشاء اتصال بقاعدة البيانات "company" باستخدام PDO
$conn = new PDO('mysql:host=localhost;dbname=company', 'phpstorm', 'Ahmadtow7@');
// تجهيز استعلام SQL لجلب كل الأعمدة والصفوف من جدول "employees"
$stmt = $conn->prepare('SELECT * FROM employees');
// تنفيذ الاستعلام
$stmt->execute();
// جلب جميع النتائج في مصفوفة
// FETCH_ASSOC يعني أن النتيجة ستكون كمصفوفة ترابطية (المفتاح = اسم العمود)
$array = $stmt->fetchAll(PDO::FETCH_ASSOC);

function createTable(array $data, array|false $ueberschriften = false, string $farbe_1 = '#ADD8E6', string $farbe_2 = '#F08080')
{
    echo "<table style='margin:auto; border:1px solid black; border-collapse:collapse; '>";

    if ($ueberschriften) {
        echo "<tr>";
        foreach ($ueberschriften as $head) {
            echo "<th style='border:1px solid black; padding:5px;'>" . htmlspecialchars($head) . "</th>";
        }
        echo "<th style='border:1px solid black; padding:5px;'>Delete</th>"; // Überschrift für Delete-Spalte
        echo  "<th style='border:1px solid black; padding:5px;'>Update</th>"; // Überschrift für Update-Spalte
        echo "</tr>";
    }

    $i = 0;
    foreach ($data as $row) {
        $farbe = ($i % 2 == 0) ? $farbe_1 : $farbe_2;
        echo "<tr style='background-color:$farbe;'>";
        foreach ($row as $cell) {
            if (filter_var($cell, FILTER_VALIDATE_IP)) {
                echo "<td style='border:1px solid black; padding:5px;'>
                        <a href='http://" . htmlspecialchars($cell) . "' target='_blank'>" . htmlspecialchars($cell) . "</a>
                      </td>";
            } else {
                echo "<td style='border:1px solid black; padding:5px;'>" . htmlspecialchars($cell) . "</td>";
            }
        }
        // Hier pro Zeile eine einzelne Delete-Link-Zelle anhängen
        $id = $user[]
        echo "<td style='border:1px solid black; padding:5px;'>
                <a href='delete.php?id=$id" . urlencode($row['id']) . "' onclick=\"return confirm('Wirklich löschen?');\">Delete</a>
              </td>";
        echo "</tr>";
        $i++;
    }

    echo "</table>";
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
// Tabelle wirklich ausgeben:
createTable($array, ['ID', 'Vorname', 'Nachname']);
?>
</body>
</html>
