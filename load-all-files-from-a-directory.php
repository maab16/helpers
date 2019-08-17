<?php
// Example 1 using opendir()

if ($handle = opendir(__DIR__ . DIRECTORY_SEPARATOR)) {

    while (false !== ($file = readdir($handle))) {

        if ($file != "." && $file != ".." && $file != 'loader.php') {

            require_once($file);
        }
    }

    closedir($handle);
}

// Example 2 using glob()

foreach ( glob(__DIR__ . DIRECTORY_SEPARATOR .'*.php') as $file) {
        require_once($file);
}