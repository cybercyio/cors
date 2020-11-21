<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://192.168.204.130/bWAPP/secret-cors-2.php");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_NOBODY, false);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:68.0) Gecko/20100101 Firefox/68.0");
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
curl_setopt($ch, CURLOPT_FAILONERROR, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
	"Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8",
	"Accept-Language: en-US,en;q=0.5",
	"Accept-Encoding: gzip, deflate",
	"Referrer: http://192.168.204.130/bWAPP/sm_cors.php",
	"Connection: keep-alive",
	"Origin: http://intranet.itsecgames.com",
	"Cache-Control: max-age=0"
));

$output = curl_exec($ch);
header("Content-type: " . curl_getinfo($ch, CURLINFO_CONTENT_TYPE));

if (curl_errno($ch)) 
	echo "cURL error: " . curl_error($ch);
else 
	echo $output;

curl_close($ch);
?>