<?php
require_once('../app/DotEnv.php');
require_once '../app/Debug.php';
require_once '../web.php';

(new DotEnv())->load(); // permet l'utilisation des valeurs en environnement

// Déclaration des constantes
define('ROOT', str_replace('public', '', realpath($_SERVER["DOCUMENT_ROOT"]))); // Racine du projet
define('URL', getenv('APP_URL')); // Url de lapplication


// Framework link - https://github.com/daveh/php-mvc