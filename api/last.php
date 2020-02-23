<?php
include_once("..\class\db.class");
$base = new DB;

/// показать последню запись 
$items = $base->getRow("SELECT * FROM `temperature` WHERE id = (select max(id) from temperature)");

//echo json_encode($items);
echo $items['temper'];


?>