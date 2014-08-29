<?
	include_once "HttpRequest.php";
	$flowKeys;
	exec("curl http://117.17.102.118:8008/flowkeys/json", $flowKeys);
	print_r($flowKeys);
	$ifIndex;
	echo "\r\b\r\b\est1<br>";
	exec("curl http://117.17.102.118/test.php", $ifIndex);
	print_r($ifIndex);
	echo "why";
?>
