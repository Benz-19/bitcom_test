<?php

use Hp\BitcomTest\Database;

require "../vendor/autoload.php";


$db  = new Database();

if ($db->Connection()) {
    echo "yes";
}
