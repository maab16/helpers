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

// Example 3 using glob() and basename()

foreach ( glob(__DIR__ . DIRECTORY_SEPARATOR .'*.php') as $path) {
		var_dump( $path ); // C:\xampp\htdocs\recycle\app\Helpers\functions.php
		var_dump(basename($path, ".php")); // functions
		var_dump(basename($path)); // functions.php
        require_once(basename($path));
}