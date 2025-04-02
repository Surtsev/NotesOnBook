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

class Page404Exception extends Exception {}

function exception_handler($e) : void {
    $ctr = new Controllers\Error();
    if ($e instanceof Page404Exception)
        $ctr->page404();
    else
        $ctr->page503($e);
}
set_exception_handler('exception_handler');

require_once $base_path . 'modules/router.php';
