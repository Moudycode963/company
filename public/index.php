<?php
//echo "<pre>";
//var_dump(explode('/',$_SERVER['REQUEST_URI']));
//var_dump($_SERVER['REQUEST_URI']);
//echo "</pre>";

$request = explode('/', trim($_SERVER['REQUEST_URI'], '/'));

$entity = $request[0] ?? null;
$method = $request[1] ?? null;
$id = $request[2] ?? null;


if ($entity === 'department'){
    if ($method === 'create') {
        require_once "../src/department/create.php"; // rufe die datei
    } elseif ($method === 'read') {
        require_once "../src/department/read.php";
    } elseif ($method === 'delete') {
        require_once "../src/department/delete.php";
    }elseif ($method === 'update') {
        require_once "../src/department/update.php";
    } else {
        echo '404';
    }

}elseif ($entity === 'employees'){
    if ($method === 'create') {
        require_once "../src/employees/create.php"; // rufe die datei
    } elseif ($method === 'read') {
        require_once "../src/employees/read.php";
    } elseif ($method === 'delete') {
        require_once "../src/employees/delete.php";
    }elseif ($method === 'update') {
        require_once "../src/employees/update.php";
    } else {
        echo '404';
    }
}else {
    echo "<h1>Willkomen</h1>";
    echo "<p>😈😈du darfst hier nichts machen !! 😈😈</p>";
    echo "<a href='department/read'> zu den departments</a>";
    echo "<a href='employees/read'> zu den employees</a>";
}



