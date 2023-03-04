<?php
// use Config\DB;
include_once('config/database.php');

// $db = DB::getInstance();

// $db->insert('users',
// [
// 	'first_name' => 'Marei',
// 	'last_name' => 'Morsy',
// 	'age'	=> 22
// ]);

include_once('models/User.php');

$user = User::getById(1);
var_dump($user);

// Framework link - https://github.com/daveh/php-mvc