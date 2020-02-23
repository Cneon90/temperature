<?php
include_once("..\class\db.class");
$base = new DB;
$id=$base->insert_temp('1','100','30');//добавление датчика в таблицу sensor
echo $id;

/*
$items = $base->getAll("SELECT * FROM `temperature`");
echo "<pre>";
print_r($items);
echo "</pre>";
*/


/* показать последню запись 
$items = $base->getRow("SELECT * FROM `temperature` WHERE id = (select max(id) from temperature)");
echo "<pre>";
print_r($items);
echo "</pre>";
*/

?>