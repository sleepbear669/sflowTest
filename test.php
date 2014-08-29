<?
	include_once "HttpRequest.php";
	echo "123123123";
	$flowKeys;
	exec("curl http://117.17.102.118:8008/flowkeys/json", $flowKeys);
	echo "123";
	print_r($flowKeys);
	$ifIndex;
	echo "test1<br>";
	exec("curl http://117.17.102.118/test.php", $ifIndex);
	print_r($ifIndex);
	echo "why";
?>
