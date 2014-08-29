<?php

class HttpRequest
{
	private $method;
	private $host;
	private $port;
	private $path;
	private $errno;
	private $errstr;
	private $timeout;
	private $query;
	private $fp;
	private $result;

	function __construct($host, $path, $query, $method="POST", $port=80, $errno=null, $errstr=null, $timeout=10)
	{
		$this->method = strtoupper($method);
		$this->host = $host;
		$this->port = $port;
		$this->path = $path;
		$this->errno = $errno;
		$this->errstr = $errstr;
		$this->timeout = $timeout;
		$this->query = $query;
	}

	private function openSocket(){
		$this->fp = fsockopen($this->host,$this->port, $this->errno, $this->errstr, $this->timeout);
	}

	private function closeSocket(){
		fclose($this->fp);
	}

	private function Header(){
		$getQuery = $this->method == "GET" ? "?".$this->query : "";
		fputs($this->fp, $this->method." ".$this->path.$getQuery." / HTTP/1.1\r\n");
		fputs($this->fp, "Host: ".$this->host."\r\n");
		fputs($this->fp, "Content-Type:application/json\r\n");
		fputs($this->fp, "Connection:Close\r\n\r\n");
	}
	private function PostQuery(){
		fputs($this->fp, $this->query."\r\n\r\n");
	}
	private function reponse(){
		while(!feof($this->fp)){
			$result .= fgets($this->fp, 1024);
		}
		$this->result = $result;
	}

	function send(){
		$this->openSocket();
		$this->header();
		if($this->method == "POST") $this->PostQuery();
		$this->reponse();
		$this->closeSocket();
		return $this->result;	
	}
}
?>