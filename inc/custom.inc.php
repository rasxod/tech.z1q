<?
$arVar = array(
	'index' => array('Main', 'Главная'),
	'image' => array('Image&Baners', 'Изображения и банеры')
);

function getMT($page) {
	global $arVar;
	$res= '';
	foreach ($arVar as $key => $link) {
		$active = '';
		if ($page == $key) {  $active = 'class="active"'; }
		if ($key == 'index') { $res .= "<li ".$active."><a href=\"/\">".$link[0]."</a></li>"; } else {$res .= "<li ".$active."><a href=\"/".$key."/\">".$link[0]."</a></li>"; }
	}
	return $res;
}
?>