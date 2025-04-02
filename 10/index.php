<?php
$base_path = __DIR__ . '/';
require_once $base_path . 'modules/Settings.php';

function my_autoloader(string $class_name): void
{
    global $base_path;
    $path = str_replace('\\', '/', $class_name) . '.php';
    require_once $base_path . 'modules/' . $path;
}
spl_autoload_register('my_autoloader');

require_once $base_path . 'modules/router.php';
