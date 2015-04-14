<?
//## Главный конфигурационный файл сайта.
// Подключается ко всем сценариям (автоматически или вручную)


//Отображение ошибок//////////////////////
ini_set("display_errors","0");			//
ini_set("display_startup_errors","0");	//
ini_set('error_reporting', E_ALL);		//
//////////////////////////////////////////
//STAT SETTINGS
$tstart=microtime(1); // Засекаем начальное время
$SiteID = 1;					//ID сайта
$testing = 0; 					//отладочная информация 0/1
$longPass = 6;					//Длинна генерируемого пароля
$version = 'v 0.27b';			//Версия

// include $_SERVER['DOCUMENT_ROOT']."/settings/DB_main.php";
///////////// ф-ция редиректа
function rdr($par) { //F-ciya redirect s parametrom
	header("Location:" . $par);
	exit;
}

//######################
///////////// задание временной зоны для php5.3
putenv('TZ=Europe/Moscow');

//#########################
session_start(); //начало сесии
$_SESSION = $_SESSION; //обновляем сессию
//определение страницы
if (isset($_GET['p'])) {
	$page = $_GET['p'];
	$_SESSION['p'] = $page;
} elseif (isset($_SESSION['p'])) {
	$page = $_SESSION['p'];
} else {
	$page = 'index';
	$_SESSION['p'] = $page;
}
 


/*
  session_destroy(); // разрушаем сессию
*/
$act = $_GET['act']; //определение дествий
$mes = $_GET['mes']; //определение дествий
include $_SERVER['DOCUMENT_ROOT']."/inc/custom.inc.php";

?>
