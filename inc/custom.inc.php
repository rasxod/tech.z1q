<?
$arVar = array(
	'index' => array('Main', 'Главная'),
	'image' => array('Image&Baners', 'Изображения и банеры'),
	'blogurl' => array('BlogUrl', 'Кнопочка на другой сайт'),
	'converter' => array('Converter', 'преобразователь SapeToLiex'),
	'convtext' => array('ConvText', 'Добавление ссылок в текст'),
	'parseurl' => array('ParseUrl', 'получить список доменов из ссылок'),
        'testpr' => array('Test Proxy', 'Проверка прокси сервера')
    );

function getMT($page) {
	global $arVar;
	$res= '';
	foreach ($arVar as $key => $link) {
		$active = '';
		if ($page == $key) {  $active = 'class="active"'; }
		if ($key == 'index') { 
                    $res .= "<li ".$active."><a href=\"/\">".$link[0]."</a></li>"; 
                } elseif ($key == 'testpr') {
                	if ($page == 'testpr') {  $active = 'class="active dropdown"'; } else { $active = 'class="dropdown"';}
					$res .= '
					<li '.$active.'>
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Tests <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="/testpr/">Test proxy</a></li>
						</ul>
					</li> 
					'; 

                }else {
                    $res .= "<li ".$active."><a href=\"/".$key."/\">".$link[0]."</a></li>"; 
                    
                }
	}
	return $res;
}
?>