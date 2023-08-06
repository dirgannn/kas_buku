<?php
function is_active_controller($controller)
{
    $CI = &get_instance();
    return ($CI->router->fetch_class() === $controller);
}

function is_active_method($controller, $method)
{
    $CI = &get_instance();
    return ($CI->router->fetch_class() === $controller && $CI->router->fetch_method() === $method);
}
