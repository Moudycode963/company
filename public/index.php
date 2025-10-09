<?php


// This line loads a central configuration file.
require_once '../config/loader.php';

// The commented-out code here shows how to inspect the URL parts for debugging.
//echo "<pre>";
//var_dump(explode('/',$_SERVER['REQUEST_URI']));
//var_dump($_SERVER['REQUEST_URI']);
//echo "</pre>";

// The $_SERVER['REQUEST_URI'] variable holds the full URL path after the domain name.
// We use `explode` to split the URL path by the `/` character.
// `trim` removes any leading or trailing slashes to clean up the URL.
$request = explode('/', trim($_SERVER['REQUEST_URI'], '/'));
//var_dump($request);
// We then assign each part of the URL to a specific variable.
// The `?? null` operator provides a default value of null if a part doesn't exist.
// This prevents errors if the URL is shorter than expected.
// For a URL like `/department/read/123`:
// $entity would be 'department'
// $method would be 'read'
// $id would be '123'
$entity = $request[0] ?? null;
$method = $request[1] ?? null;
$id = (int)$request[2] ?? null;
//var_dump($id);
// This block of `if/elseif` statements checks the `$entity` and `$method` variables
// to determine which file to load and execute.
// If the URL starts with `department`...
if ($entity === 'department') {
    // then it checks the next part of the URL to decide the action.
    if ($method === 'create') {
        require_once "../src/department/create.php";
    } elseif ($method === 'read') {
        require_once "../src/department/read.php";
    } elseif ($method === 'delete') {
        require_once "../src/department/delete.php";
    } elseif ($method === 'update') {
        require_once "../src/department/update.php";
    } elseif ($method === 'show') {
        require_once "../src/department/show.php";
    } else {
        // If the method doesn't match any of the above, it shows a 404 Not Found page.
        require_once "../view/404.html";
    }

// If the URL starts with `employees`...
} elseif ($entity === 'employees') {
    // it performs the same checks for the different methods.
    if ($method === 'create') {
        require_once "../src/employees/create.php";
    } elseif ($method === 'read') {
        require_once "../src/employees/read.php";
    } elseif ($method === 'delete') {
        require_once "../src/employees/delete.php";
    } elseif ($method === 'update') {
        require_once "../src/employees/update.php";
    } elseif ($method === 'show') {
        require_once "../src/employees/show.php";
    } else {
        require_once "../view/404.html";
    }
// If the URL has no entity (e.g., just the domain name), it loads the home page.
} elseif ($entity === "") {
    require_once "../view/index.php";
}
