<?php

spl_autoload_register(function ($className) {
    // Convert namespace separators (\) to directory separators (/)
    $className = str_replace('\\', '/', $className);

    // Adjust the base path for the classes directory
    $path = __DIR__ . '/../classes/' . $className . '.class.php';

    if (file_exists($path)) {
        include_once $path;
    } else {
        echo "Error: Unable to load class $className. File not found at $path";
    }
});
