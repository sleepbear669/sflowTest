<?
	$result = "tesst";
	echo $result;
	exec("curl http://117.17.102.118:8008/flowkeys/json",$result);
	print_r($result);
	echo "abc";
?>
