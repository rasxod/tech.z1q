<?
include $_SERVER['DOCUMENT_ROOT']."/set/general.php";

if ($act == 'testPR') {

	//сайт
	$url='http://z1q.ru/forGetProxy.php';
 
	//Адрес прокси с портом
	$proxy=trim($_POST['prUrl']);
 
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
 	// $result = preg_replace("|<pre>(.+?)</pre>|isU","",$result);
 	preg_match('|<pre.*?>(.*)</pre>|sei', $result, $arr);
 	$result = $arr[1];
	//смотрим что получилось
	echo json_encode($result);

}
?>
