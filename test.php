<?
	$result = "tesst";
	echo $result;
	$result = exec("curl http://117.17.102.118:8008/flowkeys/json");
	print_r($result);
	echo "abc";
?>