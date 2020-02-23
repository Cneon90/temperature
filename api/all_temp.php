<?php
include_once("..\class\db.class");
$base = new DB;


$items = $base->getAll("SELECT * FROM `temperature`");
echo "<pre>";
print_r($items);
echo "</pre>";





?>