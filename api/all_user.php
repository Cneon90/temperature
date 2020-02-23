<?php
include_once("..\class\db.class");
$base = new DB;

$items = $base->getAll("SELECT * FROM `users` ");
echo "<pre>";
print_r($items);
echo "</pre>";





?>