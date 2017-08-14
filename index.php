<?php
require __DIR__ . '/autoload.php';
/*
$db = new \App\Db();

$data = $db->query(
        'SELECT * FROM users',
        'App\\Models\\User'
); //\App\Models\User::class       
 * 
 */
/* public
$user = new \App\Models\User();
$users = $user->findAll();
 * 
 */
$users = \App\Models\User::findAll();
echo '<pre>';
var_dump($users);
echo '</pre>';
//$res = $db->execute('CREATE TABLE foo (id SERIAL)');
//var_dump($res);
