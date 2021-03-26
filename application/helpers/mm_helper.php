<?php
function activate_menu($menu)
{
    $ci = get_instance();
    $classname = $ci->router->fetch_class();
    return $classname == $menu ? 'active' : '';
}