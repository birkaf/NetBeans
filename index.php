<?php
require __DIR__ . '/autoload.php';
$db = new \App\Db();
$data = $db->query('SELECT * FROM foo');
var_dump($data);
//$res = $db->execute('CREATE TABLE foo (id SERIAL)');
//var_dump($res);
