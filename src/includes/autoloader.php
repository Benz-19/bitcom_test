<?php

spl_autoload_register('Autoloader');


function Autoloader($className)
{

    if (preg_match('/\A\w+\Z/', $className)) {
        include "classes/" . $className . "class.php";
    }
}
