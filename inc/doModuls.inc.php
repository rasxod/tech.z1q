<?
include $_SERVER['DOCUMENT_ROOT']."/set/general.php";

if ($act == 'testPR') {

	//сайт
	$url='http://z1q.ru/forGetProxy.php';
 
	//Адрес прокси с портом
	$proxy=trim($_POST['prUrl'].':'.$_POST['port']);
 
	// //Пользователь
	// $user="VasilevPS";
	 
	// //Пароль прокси
	// $pass="mypass";
 
	//открываем сеанс
	$ch = curl_init();
	 
	//устанавливаем прокси
	// curl_setopt($ch, CURLOPT_PROXYAUTH, CURLAUTH_NTLM);
	curl_setopt($ch, CURLOPT_PROXY, $proxy);
	// curl_setopt($ch, CURLOPT_PROXYUSERPWD, $user.":".$pass);
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_HEADER, 1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	 
	//Сохраняем результат 
	$result = curl_exec($ch);
	 
	//Очищаем память
	curl_close($ch);
 	
 	if(preg_match('|<pre.*?>(.*)</pre>|sei', $result, $arr)) {
 		$res = 'Работает :) <hr />'.$arr[1];
 	} else {
 		$res = 'Неработает :( <hr />'.file_get_contents($proxy);
 	}
 	// $result = file_get_contents($url);
	//смотрим что получилось
	echo json_encode($res);

}

if ($act == 'parseurl') {
	$links = explode("\n", $_POST['soursText']);
	$nLinks = array();
	foreach ($links as $key => $LI) {
		$nLinks[] = parse_url($LI, constant($_POST['wathUrl'])).'<br>';
	}
	$nLinks = array_unique($nLinks);
	foreach ($nLinks as $key => $NLI) {
		echo $_POST['addText'].$NLI;
	}
}
?>
