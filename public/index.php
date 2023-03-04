<?php

// On génère une constante contenant le chemin vers la racine publique du projet
define('ROOT', str_replace('public', '', realpath($_SERVER["DOCUMENT_ROOT"])));

require_once '../web.php';


// Framework link - https://github.com/daveh/php-mvc