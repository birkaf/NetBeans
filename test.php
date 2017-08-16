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
//$users = \App\Models\User::findAll();
echo '<pre>';

//$db = new App\Db();
$users = \App\Models\User::findAll();
var_dump($users);
/*
    $sql = 'INSERT INTO users (id,email,name) VALUES (\'\',:email,:name)';
    $params['email'] = 'alekseevvasil@gmail.com' ;
    $params['name'] = 'vasil' ;
     * 
     */
//$data = $db->execute($sql, $params);
echo '</pre>';
//$res = $db->execute('CREATE TABLE foo (id SERIAL)');
//var_dump($res);
