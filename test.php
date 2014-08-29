<?
	include_once "HttpRequest.php";
	$flowKeys;
	exec("curl http://117.17.102.118:8008/flowkeys/json", $flowKeys);
	print_r($flowKeys);
	$ifIndex;
	print("\r\n\r\n");
	exec("curl http://117.17.102.118/test.php", $ifIndex);
	print_r($ifIndex);
?>