<?php
/* 
    CMS 		: TechZ1Q
    Created on 	: 21-02-2015
    Author 		: Goncharov S.
    Company 	: Ssmart Lab.
    Site 		: ssmart.ru
*/

ob_start();
include $_SERVER['DOCUMENT_ROOT']."/settings/general.php";
include $_SERVER['DOCUMENT_ROOT']."/head.inc.php";
?>
<div id="wrap">
	<? 
	include $_SERVER['DOCUMENT_ROOT']."/menu.inc.php";
	$incPage = $page.".inc.php";
	include "$incPage";
	?>

<?php
include $_SERVER['DOCUMENT_ROOT']."/footer.inc.php";
ob_end_flush();
?>

