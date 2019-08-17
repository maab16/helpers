<?php
// Example 1 using opendir()

if ($handle = opendir(__DIR__ . DIRECTORY_SEPARATOR)) {

    while (false !== ($entry = readdir($handle))) {

        if ($entry != "." && $entry != ".." && $entry != 'loader.php') {

            echo "$entry\n";

            require_once($entry);
        }
    }

    closedir($handle);
}

// Example 2 using glob()

foreach ( glob(__DIR__ . DIRECTORY_SEPARATOR .'*.php') as $file) {
        require_once($file);
}