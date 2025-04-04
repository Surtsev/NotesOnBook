<?php
namespace Helpers {
    function render(string $template, array $context) {
        global $base_path;
        extract($context);
        require $base_path . 'modules/Templates/' . $template . '.php';
    }

    function get_fragment_path(string $fragment) : string {
        global $base_path;
        return $base_path . 'modules/Templates/' . $fragment . '.inc.php';
    }
}