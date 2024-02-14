<?php
include("../private/core/autoload.php");

$timeout = 7200;

// Defina o máximo de tempo da sessão
ini_set("session.gc_maxlifetime", $timeout);

// Defina a vida útil do cookie da sessão
ini_set("session.cookie_lifetime", $timeout);

// Inicie uma nova sessão
session_start();

// Defina o nome da sessão padrão
$s_name = session_name();

// Verifique se a sessão existe ou não
if (isset($_COOKIE[$s_name])) {
    setcookie($s_name, $_COOKIE[$s_name], time() + $timeout, '/');
}
$app = new App();;
