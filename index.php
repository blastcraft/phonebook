<?php

// FRONT CONTROLLER

// 1. Общие настройки
ini_set('display_errors', 1);
error_reporting(E_ALL);
session_start();

// 2. Подключение файлов системы
define('ROOT', dirname(__FILE__));
require_once(ROOT.'/components/Router.php');

// Localization
$lang = 'ru';
if (isset($_POST['lang'])) {
    $lang = $_POST['lang'];
    $_SESSION['lang'] = $lang;
} elseif (isset($_SESSION['lang'])) {
    $lang = $_SESSION['lang'];
}
$array = parse_ini_file(ROOT."/locale/".$lang.".ini");

// 3. Установка соединения с БД
require_once(ROOT.'/components/Db.php');

// 4. Вызов Router
$router = new Router();
$router->run();