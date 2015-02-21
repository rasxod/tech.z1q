<?
// echo "Сообщений отправлено: ".$i."<br />";
$tend=microtime(1); // Засекаем конечное время
// Округляем до двух знаков после запятой
$totaltime=round(($tend-$tstart),5);
// Результат на экран
echo " <br /> Отладочная информация<br />";
echo " Время генерации страницы: " . $totaltime . " сек.<br />";
$exec_time = $totaltime;
if(function_exists('memory_get_peak_usage'))
	echo "Пик испльзования памяти: " . round((memory_get_peak_usage() / 1024),2)  . " Kb <br />";
$sqlQ = mysql_query("show status like '%Questions%'");
//$sql = mysql_fetch_object($sqlQ);
//print_r ($sql->Variable_name);
$sqlN = mysql_num_rows($sqlQ);
//print $sqlN; 
$sq = 0;
while ($sq < $sqlN) {
	$sq++;
	$sql = mysql_fetch_assoc($sqlQ);
//	print_r ($sql);
	print 'Запросов ' . $sql['Variable_name'] . ': ' . $sql['Value'];	
}
?>